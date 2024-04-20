<?php

namespace App\Services;

use App\Models\Currency;
use App\Models\Gateway;
use App\Models\GatewayCurrency;
use App\Models\OwnerPackage;
use App\Models\Package;
use App\Models\SubscriptionOrder;
use App\Models\User;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Support\Facades\DB;

class PackageService
{
    use ResponseTrait;
    public function getAllData($request)
    {
        $packages = Package::query();

        return datatables($packages)
            ->addColumn('name', function ($package) {
                return $package->name;
            })
            ->addColumn('monthly_price', function ($package) {
                return currencyPrice($package->monthly_price);
            })
            ->addColumn('yearly_price', function ($package) {
                return currencyPrice($package->yearly_price);
            })
            ->addColumn('status', function ($package) {
                if ($package->status == ACTIVE) {
                    return '<div class="status-btn status-btn-green font-13 radius-4">Active</div>';
                } else {
                    return '<div class="status-btn status-btn-orange font-13 radius-4">Deactivate</div>';
                }
            })
            ->addColumn('trail', function ($package) {
                if ($package->is_trail == ACTIVE) {
                    return '<div class="status-btn status-btn-blue font-13 radius-4">Yes</div>';
                } else {
                    return '<div class="status-btn status-btn-red font-13 radius-4">No</div>';
                }
            })
            ->addColumn('action', function ($package) {
                return '<div class="tbl-action-btns d-inline-flex">
                    <button type="button" class="p-1 tbl-action-btn edit" data-id="' . $package->id . '" title="' . __('Edit') . '"><span class="iconify" data-icon="clarity:note-edit-solid"></span></button>
                    <button onclick="deleteItem(\'' . route('admin.packages.destroy', $package->id) . '\', \'allDataTable\')" class="p-1 tbl-action-btn"   title="' . __('Delete') . '"><span class="iconify" data-icon="ep:delete-filled"></span></button>
                </div>';
            })
            ->rawColumns(['name', 'status', 'trail', 'action'])
            ->make(true);
    }

    public function getAll()
    {
        return Package::query()->get();
    }
    
    
 


    
    

    public function getActiveAll()
    {
        return Package::where('status', ACTIVE)->where('is_trail', '!=', ACTIVE)->get();
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            $id = $request->get('id', '');
            if ($id != '') {
                $package = Package::findOrFail($request->id);
            } else {
                $package = new Package();
            }

            // Slug exists
            $slug = getSlug($request->name);
            $slugExist = Package::where('slug', $slug)->whereNot('id', $request->id)->exists();
            if ($slugExist) {
                throw new Exception('Name Already Exist');
            }

            $package->name = $request->name;
            $package->slug = $slug;
            $package->max_property = $request->max_property;
            $package->max_unit = $request->max_unit ?? 0;
            $package->max_tenant = $request->max_tenant;
            $package->max_maintainer = $request->max_maintainer;
            $package->max_invoice = $request->max_invoice;
            $package->max_auto_invoice = $request->max_auto_invoice;
            $package->notice_support = $request->notice_support;
            $package->ticket_support = $request->ticket_support;
            $package->status = $request->status;
            $package->is_trail = $request->is_trail;
            $package->is_default = $request->is_default;
            $package->monthly_price = $request->monthly_price;
            $package->yearly_price = $request->yearly_price;
            $package->save();

            // update if status changed
            // if (is_null(Package::where(['status' => ACTIVE])->first())) {
            //     Package::first()->update(['status' => ACTIVE]);
            // }

            // // update if trail changed
            // if (is_null(Package::where(['is_trail' => ACTIVE, 'status' => ACTIVE])->first())) {
            //     Package::where(['status' => ACTIVE])->first()->update(['is_trail' => ACTIVE]);
            // }

            DB::commit();
            $message = $request->id ? __(UPDATED_SUCCESSFULLY) : __(CREATED_SUCCESSFULLY);
            return $this->success([], $message);
        } catch (Exception $e) {
            DB::rollBack();
            $message = getErrorMessage($e, $e->getMessage());
            return $this->error([],  $message);
        }
    }

    public function getInfo($id)
    {
        return Package::findOrFail($id);
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            if (Package::where('status', ACTIVE)->count() > 1) {
                Package::findOrFail($id)->delete();

                // update if trail changed
                if (is_null(Package::where(['is_trail' => ACTIVE, 'status' => ACTIVE])->first())) {
                    Package::where(['status' => ACTIVE])->first()->update(['is_trail' => ACTIVE]);
                }

                DB::commit();
                $message = __(DELETED_SUCCESSFULLY);
                return $this->success([], $message);
            } else {
                $message = __("Trial package can not be deleted");
                return $this->error([], $message);
            }
        } catch (Exception $e) {
            DB::rollBack();
            $message = getErrorMessage($e, $e->getMessage());
            return $this->error([],  $message);
        }
    }

    public function getUserPackagesData($request)
    {
        $ownerPackages = OwnerPackage::query()
            ->join('users', 'owner_packages.user_id', '=', 'users.id')
            ->join('packages', 'owner_packages.package_id', '=', 'packages.id')
            ->join('subscription_orders', 'owner_packages.order_id', '=', 'subscription_orders.id')
            ->join('gateways', 'subscription_orders.gateway_id', '=', 'gateways.id')
            ->select('owner_packages.*', 'users.first_name', 'users.last_name', 'users.email', 'packages.name as packageName', 'subscription_orders.payment_status', 'gateways.title as gatewaysName')
            ->orderBy('owner_packages.id', 'desc');

        return datatables($ownerPackages)
            ->addIndexColumn()
            ->addColumn('user_name', function ($ownerPackage) {
                return  $ownerPackage->first_name . ' ' . $ownerPackage->last_name;
            })
            ->addColumn('package_name', function ($ownerPackage) {
                return  $ownerPackage->packageName;
            })
            ->addColumn('gateway', function ($ownerPackage) {
                return  $ownerPackage->gatewaysName;
            })
            ->addColumn('payment_status', function ($ownerPackage) {
                if ($ownerPackage->payment_status == ORDER_PAYMENT_STATUS_PAID) {
                    return '<div class="status-btn status-btn-green font-13 radius-4">Paid</div>';
                } elseif ($ownerPackage->payment_status == ORDER_PAYMENT_STATUS_PENDING) {
                    return '<div class="status-btn status-btn-red font-13 radius-4">Pending</div>';
                } else {
                    return '<div class="status-btn status-btn-orange font-13 radius-4">Cancelled</div>';
                }
            })->addColumn('start_date', function ($ownerPackage) {
                return  date('Y-m-d', strtotime($ownerPackage->start_date));
            })->addColumn('end_date', function ($ownerPackage) {
                return  date('Y-m-d', strtotime($ownerPackage->end_date));
            })->addColumn('status', function ($ownerPackage) {
                if ($ownerPackage->status == ACTIVE) {
                    return '<div class="status-btn status-btn-blue font-13 radius-4">Active</div>';
                } else {
                    return '<div class="status-btn status-btn-orange font-13 radius-4">Deactivate</div>';
                }
            })->addColumn('action', function ($ownerPackage) {
                return '<div class="tbl-action-btns d-inline-flex">
                    <button type="button" class="p-1 tbl-action-btn edit" data-id="' . $ownerPackage->id . '" title="Edit"><span class="iconify" data-icon="clarity:note-edit-solid"></span></button>
                </div>';
            })
            ->rawColumns(['user_name', 'package_name', 'payment_status', 'start_date', 'end_date', 'status', 'action'])
            ->make(true);
    }
    
       
       

    
    
    public function getUserPackagesDatas($request)
{
     $ownerPackages = OwnerPackage::query()
        ->join('users', 'owner_packages.user_id', '=', 'users.id')
        ->join('packages', 'owner_packages.package_id', '=', 'packages.id')
        ->join('subscription_orders', 'owner_packages.order_id', '=', 'subscription_orders.id')
        ->join('gateways', 'subscription_orders.gateway_id', '=', 'gateways.id')
        ->leftJoin('bank_accounts', 'users.id', '=', 'bank_accounts.user_id') // Left join to include users without bank accounts
        ->where('users.partner_code', 'this_partner') // Filter only partner users
        ->select([
            'owner_packages.*',
            'users.first_name',
            'users.last_name',
            'users.email',
            'users.referral_code',
            'packages.name as packageName',
            'subscription_orders.payment_status',
            'gateways.title as gatewaysName',
            // Bank account fields
            'bank_accounts.account_holder_name',
            'bank_accounts.account_number',
            'bank_accounts.ifsc_code',
            'bank_accounts.bank_name',
            // Subquery for referral count
            \DB::raw("(SELECT COUNT(*) FROM users as ref_users WHERE ref_users.referred_by = users.referral_code) as referralCount")
        ])
        ->orderBy('owner_packages.id', 'desc');

    return datatables($ownerPackages)
        ->addIndexColumn()
        
         ->addColumn('account_holder_name', function ($ownerPackage) {
            return $ownerPackage->account_holder_name ?? 'N/A'; // Provide 'N/A' if null
        })
        ->addColumn('account_number', function ($ownerPackage) {
            return $ownerPackage->account_number ?? 'N/A'; // Provide 'N/A' if null
        })
        ->addColumn('ifsc_code', function ($ownerPackage) {
            return $ownerPackage->ifsc_code ?? 'N/A'; // Provide 'N/A' if null
        })
        ->addColumn('bank_name', function ($ownerPackage) {
            return $ownerPackage->bank_name ?? 'N/A'; // Provide 'N/A' if null
        })
        
        
        
        
        
        
         ->addColumn('referralCount', function ($ownerPackage) {
            // Calculate the referral count for each user
            return User::where('referred_by', $ownerPackage->referral_code)->count();
        })
        
        ->addColumn('user_name', function ($ownerPackage) {
            return $ownerPackage->first_name . ' ' . $ownerPackage->last_name;
        })
        
        
        
        ->addColumn('package_name', function ($ownerPackage) {
            return $ownerPackage->packageName;
        })
        ->addColumn('gateway', function ($ownerPackage) {
            return $ownerPackage->gatewaysName;
        })
        ->addColumn('payment_status', function ($ownerPackage) {
            if ($ownerPackage->payment_status == ORDER_PAYMENT_STATUS_PAID) {
                return '<div class="status-btn status-btn-green font-13 radius-4">Paid</div>';
            } elseif ($ownerPackage->payment_status == ORDER_PAYMENT_STATUS_PENDING) {
                return '<div class="status-btn status-btn-red font-13 radius-4">Pending</div>';
            } else {
                return '<div class="status-btn status-btn-orange font-13 radius-4">Cancelled</div>';
            }
        })
        
        ->addColumn('referral_code', function ($ownerPackage) {
    return $ownerPackage->referral_code ?? ''; // Provide a default empty string if null
})
        ->addColumn('start_date', function ($ownerPackage) {
            return date('Y-m-d', strtotime($ownerPackage->start_date));
        })
        ->addColumn('end_date', function ($ownerPackage) {
            return date('Y-m-d', strtotime($ownerPackage->end_date));
        })
        ->addColumn('status', function ($ownerPackage) {
            if ($ownerPackage->status == ACTIVE) {
                return '<div class="status-btn status-btn-blue font-13 radius-4">Active</div>';
            } else {
                return '<div class="status-btn status-btn-orange font-13 radius-4">Deactivate</div>';
            }
        })

        
        ->addColumn('action', function ($ownerPackage) {
            return '<div class="tbl-action-btns d-inline-flex">
                <button type="button" class="p-1 tbl-action-btn edit" data-id="' . $ownerPackage->id . '" title="Edit"><span class="iconify" data-icon="clarity:note-edit-solid"></span></button>
            </div>';
        })
        
 ->rawColumns(['user_name', 'package_name', 'payment_status', 'start_date', 'end_date', 'status', 'action', 'referralCount', 'account_holder_name', 'account_number', 'ifsc_code', 'bank_name'])
        ->make(true);
}
   
    
    // public function getUserPackagesDatas($request)
    // {
    //     $ownerPackages = OwnerPackage::query()
    //     ->join('users', 'owner_packages.user_id', '=', 'users.id')
    //     ->join('packages', 'owner_packages.package_id', '=', 'packages.id')
    //     ->join('subscription_orders', 'owner_packages.order_id', '=', 'subscription_orders.id')
    //     ->join('gateways', 'subscription_orders.gateway_id', '=', 'gateways.id')
    //     ->where('users.partner_code', 'this_partner') // Filter only partner users
    //     ->select('owner_packages.*', 'users.first_name', 'users.last_name', 'users.email', 'packages.name as packageName', 'subscription_orders.payment_status', 'gateways.title as gatewaysName')
    //     ->orderBy('owner_packages.id', 'desc');

    //     return datatables($ownerPackages)
    //         ->addIndexColumn()
    //         ->addColumn('user_name', function ($ownerPackage) {
    //             return  $ownerPackage->first_name . ' ' . $ownerPackage->last_name;
    //         })
    //         ->addColumn('package_name', function ($ownerPackage) {
    //             return  $ownerPackage->packageName;
    //         })
    //         ->addColumn('gateway', function ($ownerPackage) {
    //             return  $ownerPackage->gatewaysName;
    //         })
    //         ->addColumn('payment_status', function ($ownerPackage) {
    //             if ($ownerPackage->payment_status == ORDER_PAYMENT_STATUS_PAID) {
    //                 return '<div class="status-btn status-btn-green font-13 radius-4">Paid</div>';
    //             } elseif ($ownerPackage->payment_status == ORDER_PAYMENT_STATUS_PENDING) {
    //                 return '<div class="status-btn status-btn-red font-13 radius-4">Pending</div>';
    //             } else {
    //                 return '<div class="status-btn status-btn-orange font-13 radius-4">Cancelled</div>';
    //             }
    //         })->addColumn('start_date', function ($ownerPackage) {
    //             return  date('Y-m-d', strtotime($ownerPackage->start_date));
    //         })->addColumn('end_date', function ($ownerPackage) {
    //             return  date('Y-m-d', strtotime($ownerPackage->end_date));
    //         })->addColumn('status', function ($ownerPackage) {
    //             if ($ownerPackage->status == ACTIVE) {
    //                 return '<div class="status-btn status-btn-blue font-13 radius-4">Active</div>';
    //             } else {
    //                 return '<div class="status-btn status-btn-orange font-13 radius-4">Deactivate</div>';
    //             }
    //         })->addColumn('action', function ($ownerPackage) {
    //             return '<div class="tbl-action-btns d-inline-flex">
    //                 <button type="button" class="p-1 tbl-action-btn edit" data-id="' . $ownerPackage->id . '" title="Edit"><span class="iconify" data-icon="clarity:note-edit-solid"></span></button>
    //             </div>';
    //         })
    //         ->rawColumns(['user_name', 'package_name', 'payment_status', 'start_date', 'end_date', 'status', 'action'])
    //         ->make(true);
    // }
    
    
    
        
    public function assignPackage($request)
    {
        DB::beginTransaction();
        try {
            $package =  Package::findOrFail($request->package_id);
            $ownerUser = User::where('role', USER_ROLE_OWNER)->findOrFail($request->user_id);
            $adminUser = User::where('role', USER_ROLE_ADMIN)->first();

            $gateway = Gateway::where(['owner_user_id' => $adminUser->id, 'slug' => 'cash'])->firstOrFail();
            $currency = Currency::where('current_currency', 'on')->first()->currency_code;
            $gatewayCurrency = GatewayCurrency::where(['gateway_id' => $gateway->id, 'currency' => $currency])->firstOrFail();

            $price = 0;
            $duration = 0;
            if ($request->duration_type == PACKAGE_DURATION_TYPE_MONTHLY) {
                $price = $package->monthly_price;
                $duration = 30;
            } else {
                $price = $package->yearly_price;
                $duration = 365;
            }

            $order = SubscriptionOrder::create([
                'user_id' => $ownerUser->id,
                'package_id' => $package->id,
                'payment_status' => ORDER_PAYMENT_STATUS_PAID,
                'transaction_id' => str_replace("-", "", uuid_create(UUID_TYPE_RANDOM)),
                'amount' => $price,
                'system_currency' => $currency,
                'gateway_id' => $gateway->id,
                'duration_type' => $request->duration_type,
                'gateway_currency' => $gatewayCurrency->currency,
                'conversion_rate' => $gatewayCurrency->conversion_rate,
                'subtotal' => $price,
                'total' => $price,
                'transaction_amount' => $price * $gatewayCurrency->conversion_rate
            ]);

            setUserPackage($order->user_id, $package, $duration, $order->id);
            DB::commit();
            return $this->success([], __(ASSIGNED_SUCCESSFULLY));
        } catch (Exception $e) {
            DB::rollBack();
            $message = getErrorMessage($e, $e->getMessage());
            return $this->error([],  $message);
        }
    }
}
