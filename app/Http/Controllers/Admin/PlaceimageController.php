<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PlaceimageController extends Controller
{
    public function Place()
    {
        $data = Place::all();
        return view('admin.recommended.places', compact('data'));
    }
    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'place' => 'required|string|max:80',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=400,height=500',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // File upload handling
        $file = $request->file('image');
        $path = $file ? Storage::disk('uploads')->put('places', $file) : null;

        // Save student data to database
        Place::create([
        'place' => $request->place,
        'image' => $path,
        ]);
        return redirect()->back()->with('success', 'Package record created successfully.');
    }
    public function Editpage(Request $request, $id)
    {
        $data = Place::find($id);
        return view('admin.recommended.editplace', compact('data'));
    }
    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'place' => 'required|string|max:80',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=400,height=500',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Place::find($id);
        $file = $request->file('image');
        if($file)
        {
            //Delete old image if exists
            if($data->image)
            {
                Storage::disk('uploads')->delete($data->image);
            }
            $path = Storage::disk('uploads')->put('places',$request->image);
        }
        else
        {
            $path = $data->image;
        }
        $data->Update([
            'place' => $request->place,
            'image' => $path,
        ]);
        return redirect(route('Places'))->with('success', ' updated successfully.'); 
    }
    public function Delete(Request $request,$id)
    {
        Place::find($id)->delete();
        return redirect()->back()->with('success', ' Deleted successfully.');
    }

}
