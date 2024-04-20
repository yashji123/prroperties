<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BankAccount;
use Illuminate\Support\Facades\Auth;

class BankAccountController extends Controller
{
    /**
     * Store a new bank account in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'account_holder_name' => 'required|string|max:255',
        'account_number' => 'required|string|max:255',
        'ifsc_code' => 'required|string|max:255',
        'bank_name' => 'required|string|max:255',
    ]);

    $user = Auth::user();
    $user->bankAccount()->updateOrCreate(
        ['user_id' => $user->id], // Unique identifier for the user's bank account
        $validatedData // The data to update or create with
    );

    return redirect()->route('owner.property.referral')->with('success', 'Bank account details saved successfully.');
}

    
    
    public function showBankAccountForm()
{
    $user = Auth::user();
    $bankAccount = $user->bankAccount; // Assuming you have set up a one-to-one relationship in the User model

    return view('owner.bank_account_form', compact('bankAccount'));
}



    
}
