<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function Gallery()
    {
        $data = Gallery::all();
        return view('admin.gallery.gallerypage', compact('data'));
    }
    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'head' => 'required|string|max:80',
            'details' => 'required|string|max:150',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=480,height=360',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // File upload handling
        $file = $request->file('image');
        $path = $file ? Storage::disk('uploads')->put('gallery', $file) : null;

        // Save student data to database
        Gallery::create([
            'head' => $request->head,
            'details' => $request->details,
            'image' => $path,
        ]);
        return redirect()->back()->with('success', 'Package record created successfully.');
    }
    public function Editpage(Request $request, $id)
    {
        $data = Gallery::find($id);
        return view('admin.gallery.editgallery', compact('data'));
    }
    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'head' => 'required|string|max:80',
            'details' => 'required|string|max:150',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=480,height=360',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Gallery::find($id);
        $file = $request->file('image');
        if($file)
        {
            //Delete old image if exists
            if($data->image)
            {
                Storage::disk('uploads')->delete($data->image);
            }
            $path = Storage::disk('uploads')->put('gallery',$request->image);
        }
        else
        {
            $path = $data->image;
        }
        $data->Update([
            'head' => $request->head,
            'details' => $request->details,
            'image' => $path,
        ]);
        return redirect(route('Gallerypage'))->with('success', ' updated successfully.'); 
    }
    public function Delete(Request $request,$id)
    {
        Gallery::find($id)->delete();
        return redirect()->back()->with('success', ' Deleted successfully.');
    }
    
}
