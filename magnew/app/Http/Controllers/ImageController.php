<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'image' => 'required|max:2048000', // Adjust image upload rules as per your requirement
        ]);

        // Get the user ID from the request
        $userId = $request->user_id;

        // Store the uploaded image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);

            // Create a new Image model instance
            $imageModel = new Image([
                'user_id' => $userId,
                'path' => 'storage/images/'.$imageName,
                'upload_date' => now(),
            ]);

            // Save the image record to the database
            $imageModel->save();

            return response()->json(['message' => 'Image uploaded successfully'], 201);
        }

        return response()->json(['message' => 'Image upload failed'], 400);
    }

    public function getData()
    {
        // Retrieve all images from the images table
        $images = Image::all();

        // Check if there are any images
        if ($images->isEmpty()) {
            return response()->json(['message' => 'No images found'], 404);
        }

        // Return the images data
        return response()->json(['images' => $images], 200);
    }

    public function test(Request $request){
        // Validate the incoming request
        // $request->validate([
        //     'user_id' => 'required|exists:users,id',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image upload rules as per your requirement
        // ]);

        // Get the user ID from the request
        $userId = $request->user_id;

        // Store the uploaded image
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imageName = time().'.'.$image->getClientOriginalExtension();
        //     $image->storeAs('public/images', $imageName);

        //     // Create a new Image model instance
        //     $imageModel = new Image([
        //         'user_id' => $userId,
        //         'path' => 'storage/images/'.$imageName,
        //         'upload_date' => now(),
        //     ]);

        //     // Save the image record to the database
        //     $imageModel->save();

            return response()->json(['message' => 'Image uploaded successfully', 'user'=>$userId], 201);
        // }

        // return response()->json(['message' => 'Image upload failed'], 400);
    }
}
