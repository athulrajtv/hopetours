<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function Review()
    {
        $data = Review::all();
        return view('admin.testmonial.testpage', compact('data'));
    }

    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:80',
            'designation' => 'required|string|max:50',  
            'review' => 'required|string|max:255',     
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=100,height=100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=480,height=360',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // File upload handling
        $image1_path = $request->file('profile_image') ? Storage::disk('uploads')->put('reviews/img', $request->file('profile_image')) : null;
        $image2_path = $request->file('image') ? Storage::disk('uploads')->put('reviews/img', $request->file('image')) : null;

        // Save data to the database, separating 'image' and 'gallery'
        Review::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'review' => $request->review,
            'profile_image' => $image1_path,  // Store image path
            'image' => $image2_path,
        ]);
        return redirect()->back()->with('success', 'Record created successfully.');
    }

    public function Editpage(Request $request, $id)
    {
        $data = Review::find($id);
        return view('admin.testmonial.edittest', compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:80',
            'designation' => 'required|string|max:50',  
            'review' => 'required|string|max:255',     
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=100,height=100',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=480,height=360',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Review::find($id);

        // Handle the 'profile_image' file
        $file = $request->file('profile_image');
        if($file)
        {
            //Delete old image if exists
            if($data->profile_image)
            {
                Storage::disk('uploads')->delete($data->profile_image);
            }
            $image1_path = Storage::disk('uploads')->put('reviews/img',$request->profile_image);
        }

        // Handle the 'image' file
        $file = $request->file('image');
        if($file)
        {
            //Delete old image if exists
            if($data->image)
            {
                Storage::disk('uploads')->delete($data->image);
            }
            $image2_path = Storage::disk('uploads')->put('reviews/img',$request->image);
        }
        
        $data->Update([
            'name' => $request->name,
            'designation' => $request->designation,
            'review' => $request->review,
            'profile_image' => $image1_path,  // Store image path
            'image' => $image2_path,
        ]);
        return redirect(route('testmonial'))->with('success', ' Updated successfully.'); 
    }

    public function Delete(Request $request,$id)
    {
        $data = Review::find($id);

        if(!$data)
        {
            return redirect()->back()->with('error', 'Record not found');
        }

        if($data->profile_image)
        {
            Storage::disk('uploads')->delete($data->profile_image);
        }

        if($data->image)
        {
            Storage::disk('uploads')->delete($data->image);
        }

        $data->delete();

        return redirect()->back()->with('success', ' Deleted successfully.');
    }
}
