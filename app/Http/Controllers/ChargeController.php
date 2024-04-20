<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChargeController extends Controller
{
    public function handleCharge(Request $request)
    {
        $email = $request->input('email');
        $phone = $request->input('phone');
        $planName = $request->input('plan_name');
        $discountCode = $request->input('discount_code');
        $stripeSecret = env('STRIPE_SECRET');
        
        
        // Convert the amount from dollars to cents
        $amountInDollars = $request->input('amount');
        
        
        if ($discountCode === 'PRRSOFT23') {
        $amountInDollars = 0;
    }
        $amountInCents = $amountInDollars * 100;

        $stripeToken = $request->input('stripeToken');

        // Create a Stripe customer
        $customerResponse = Http::withHeaders([
            'Authorization' => 'Bearer ' . $stripeSecret,
            'Content-Type' => 'application/x-www-form-urlencoded'
        ])->asForm()->post('https://api.stripe.com/v1/customers', [
            'email' => $email,
            'phone' => $phone,
            'source' => $stripeToken,
        ]);

        if ($customerResponse->failed()) {
            Log::error('Failed to create Stripe customer', ['response' => $customerResponse->json()]);
            return back()->withErrors(['error' => 'Failed to create customer']);
        }

        $customerId = $customerResponse->json()['id'];

        // Make a charge using the customer ID and the converted amount
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $stripeSecret,
            'Content-Type' => 'application/x-www-form-urlencoded'
        ])->asForm()->post('https://api.stripe.com/v1/charges', [
            'amount' => $amountInCents, // Use the converted amount in cents
            'currency' => 'usd',
            'customer' => $customerId,
            'description' => "Charge for {$planName} plan",
        ]);

        if ($response->successful()) {
            
            session([
            'email' => $email,
            'phone' => $phone
        ]);
            return redirect('/login'); // Redirect as needed
        } else {
            Log::error('Stripe Error:', ['response' => $response->json()]);
            return back()->withErrors(['error' => 'Payment failed']);
        }
    }
}
