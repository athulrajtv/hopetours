<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Package;
use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PackagesController extends Controller
{
    public function Packages()
    {
        $data = Travel::all();
        // For each package, get associated images
        foreach ($data as $package) {
            $package->galleryImages = Image::where('gallery_id', $package->id)->get();
        }
        /* foreach ($data as $package) {
            $package = Image::where('gallery_id', $package->id)->get(); This will overwrite the package data ($package) with the list of images,
        } */

        return view('admin.packages.travelpackages', compact('data','package'));
    }

    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'head' => 'required|string|max:80',
            'price' => 'required|string|max:50',  
            'days' => 'required|string|max:50',   
            'title' => 'required|string|max:50',
            'details' => 'required|string|max:700',
            'month' => 'required|string|max:80',   
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=930,height=466',
            'information' => 'required|string',
            'plan' => 'required|string',
            'link' => 'required|string',
            

        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // File upload handling
        $image1_path = $request->file('image') ? Storage::disk('uploads')->put('packages/img', $request->file('image')) : null;

        // Save data to the database, separating 'image' and 'gallery'
        $travel=Travel::create([
            'head' => $request->head,
            'price' => $request->price,
            'days' => $request->days,
            'title' => $request->title,
            'details' => $request->details,
            'month' => $request->month,
            'image' => $image1_path,  // Store image path
            'information' => $request->information,
            'plan' => $request->plan,
            'link' => $request->link,

        ]);
        
        // Check if gallery images are uploaded
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $galleryImage) {
                // Handle file upload for each gallery image
                $image2_path = Storage::disk('uploads')->put('packages/gallery', $galleryImage);

                // Save each image to the images table
                Image::create([
                    'gallery_id' => $travel->id,  // Set the gallery_id to the created Travel's ID
                    'gallery' => $image2_path,    // Store gallery image path
                ]);
            }
        }

        return redirect()->back()->with('success', 'Package record created successfully.');
    }

    public function Editpage(Request $request, $id)
    {
        $data = Travel::find($id);
        // Find all images associated with the package by gallery_id
        $items = Image::where('gallery_id', $id)->get();
        return view('admin.packages.edittravelpackages', compact('data','items'));
    }
    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'head' => 'required|string|max:80',
            'price' => 'required|string|max:50',  
            'days' => 'required|string|max:50',   
            'title' => 'required|string|max:50',
            'details' => 'required|string|max:700',
            'month' => 'required|string|max:80',   
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=930,height=466',
            'information' => 'required|string',
            'plan' => 'required|string',
            'link' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Travel::find($id);
        $file = $request->file('image');
        if($file)
        {
            //Delete old image if exists
            if($data->image)
            {
                Storage::disk('uploads')->delete($data->image);
            }
            $path = Storage::disk('uploads')->put('packages/img',$request->image);
        }
        else
        {
            $path = $data->image;
        }
        $data->Update([
            'head' => $request->head,
            'price' => $request->price,
            'days' => $request->days,
            'title' => $request->title, 
            'details' => $request->details,
            'month' => $request->month,
            'image' => $path,
            'information' => $request->information,
            'plan' => $request->plan,
            'link' => $request->link,
        ]);

        $existingImages = Image::where('gallery_id', $id)->get();

        // If the user is replacing existing images, loop through and update them.
        foreach ($existingImages as $key => $existingImage) {
            // Check if there are uploaded files that match the number of existing images
            if (isset($request->file('gallery')[$key])) {
                // Delete the old image
                Storage::disk('uploads')->delete($existingImage->gallery);

                // Upload the new image
                $newImagePath = Storage::disk('uploads')->put('packages/gallery', $request->file('gallery')[$key]);

                // Update the image record with the new path
                $existingImage->update([
                    'gallery' => $newImagePath,
                ]);
            }
        }

        return redirect(route('Packages'))->with('success', ' updated successfully.'); 
    }
    public function Delete(Request $request, $id)
    {
        $data = Travel::find($id);

        // Delete the primary image
        if ($data->image) {
            Storage::disk('uploads')->delete($data->image);
        }

        // Delete associated gallery images
        $galleryImages = Image::where('gallery_id', $id)->get();
        foreach ($galleryImages as $galleryImage) {
            if ($galleryImage->gallery) {
                Storage::disk('uploads')->delete($galleryImage->gallery);
            }
            $galleryImage->delete();
        }

        // Delete the main record
        $data->delete();

        return redirect()->back()->with('success', 'Deleted successfully.');
    }

}
