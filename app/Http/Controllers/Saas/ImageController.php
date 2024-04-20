<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
 
        $request->image->move(public_path('images'), $imageName);

        return back()
            ->with('success','You have successfully uploaded an image.')
            ->with('image', $imageName);
    }
}
