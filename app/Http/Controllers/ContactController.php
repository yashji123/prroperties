<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Ensure this is the correct model for your form.

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'message' => 'required'
        ]);

        // Create a new Contact instance and save the data
        $contact = new Contact;
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->phone = $validatedData['phone'];
        $contact->message = $validatedData['message'];
        
        $contact->save();

        // Redirect back with a success message
       return redirect('/thank-you')->with('success', 'Your inquiry has been sent successfully!');
    }
}
