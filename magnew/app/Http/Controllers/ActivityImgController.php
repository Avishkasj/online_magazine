<?php

namespace App\Http\Controllers;

use App\Models\ActivityImg;
use Illuminate\Http\Request;

class ActivityImgController extends Controller
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
            $request->image->move(public_path('images'), $imageName);

            // Create a new Image model instance
            $imageModel = new ActivityImg([
                'user_id' => $userId,
                'path' => 'images/'.$imageName,
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
        // Retrieve all activity images from the activity_imgs table
        $activityImages = ActivityImg::all();

        // Check if there are any activity images
        if ($activityImages->isEmpty()) {
            return response()->json(['message' => 'No activity images found'], 404);
        }

        // Return the activity images data
        return response()->json(['activityImages' => $activityImages], 200);
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
