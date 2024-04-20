<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        // This assumes you are using one image at a time
        if (!$request->hasFile('image')) {
            return response()->json(['error' => 'No image file found'], 400);
        }

        $image = $request->file('image');
        $validator = Validator::make(
            ['image' => $image],
            ['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:9048']
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }

        try {
            // Generate a unique name for the image
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            // Move the image to the public/images directory
            $image->move(public_path('images'), $imageName);

            // Return success response
            return response()->json([
                'success' => true,
                'message' => 'Image successfully uploaded.',
                'imageName' => $imageName,
                'imagePath' => asset('images/' . $imageName)  // Provide the URL to access the image
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error uploading the image: ' . $e->getMessage()], 500);
        }
    }
}
