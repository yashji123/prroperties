<?php
    namespace App\Http\Controllers\Saas;
    use App\Http\Controllers\Controller;
    use Exception;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;
    
    class LandlordForm extends Controller{
        public function store(Request $request)
        {
            DB::beginTransaction();
            try {
                $email_id = $_POST['email_id'];
                $owner_id = DB::table('owners')->join('users', 'owners.user_id', '=', 'users.id')->select('owners.id')->where('email', '=', $email_id)->value('id');
                $address = $_POST['flat_house'].', '.$_POST['street_address'].', '.$_POST['nearby_landmark'].', '.$_POST['district'].', '.$_POST['city'].', '.$_POST['state'].', '.$_POST['pin_code'].', '.$_POST['country'];
                $occupancy = $_POST['loanType'];
                $property_type = $_POST['str'];
                $no_of_doors = $_POST['doors'];
                $rental_val = $_POST['monthlyRevenue'];
                $amenities = json_encode($_POST['amenities']);
                $utilities = json_encode($_POST['utilities']);
                $img = json_encode($_POST['imageInputs']);
                $pay_name = $_POST['pay_first_name'] . ' ' . $_POST['pay_last_name'];
                $pay_email = $_POST['email'];
                $pay_mobile = $_POST['phone'];
                $pay_card_num = $_POST['card_number'];
                $total_amount = $_POST['total_amount'];
                DB::table('landlord_add_flow')->insert([
                    'owner_id' => $owner_id,
                    'address' => $address,
                    'occupancy' => $occupancy,
                    'property_type' => $property_type,
                    'no_of_doors' => $no_of_doors,
                    'rental_val' => $rental_val,
                    'amenities' => $amenities,
                    'utilities' => $utilities,
                    'img' => $img,
                    'pay_name' => $pay_name,
                    'pay_email' => $pay_email,
                    'pay_mobile' => $pay_mobile,
                    'pay_card_num' => $pay_card_num,
                    'total_amount' => $total_amount
                ]);
                DB::commit();
                return 'success';
            } catch (Exception $e) {
                DB::rollBack();
                // return back()->with('error', $e->getMessage());
                return $e;
            }
        }
    }
?>