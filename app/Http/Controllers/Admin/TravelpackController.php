<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TravelpackController extends Controller
{
    public function Travelpack()
    {
        $data = Package::all();
        return view('admin.package.travelpack', compact('data'));
    }
    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'days' => 'required|string|max:25',
            'details' => 'required|string|max:60',
            'mprice' => 'required|string|max:255',
            'discount' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'detail' => 'required|string|max:30',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=350,height=200',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // File upload handling
        $file = $request->file('image');
        $path = $file ? Storage::disk('uploads')->put('images', $file) : null;

        // Save student data to database
        Package::create([
            'days' => $request->days,
            'details' => $request->details,
            'mprice' => $request->mprice,
            'discount' => $request->discount,
            'price' => $request->price,
            'detail' => $request->detail,
            'image' => $path,
        ]);
        return redirect()->back()->with('success', 'Package record created successfully.');
    }
    public function Edit(Request $request,$id)
    {
        $data = Package::find($id);
        return view('admin.package.editpackage', compact('data'));
    }
    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'days' => 'required|string|max:25',
            'details' => 'required|string|max:60',
            'mprice' => 'required|string|max:255',
            'discount' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'detail' => 'required|string|max:30',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=350,height=200',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Package::find($id);
        $file = $request->file('image');
        if($file)
        {
            //Delete old image if exists
            if($data->image)
            {
                Storage::disk('uploads')->delete($data->image);
            }
            $path = Storage::disk('uploads')->put('images',$request->image);
        }
        else
        {
            $path = $data->image;
        }
        $data->Update([
            'days' => $request->days,
            'details' => $request->details,
            'mprice' => $request->mprice,
            'discount' => $request->discount, 
            'price' => $request->price,
            'detail' => $request->detail,
            'image' => $path,
        ]);
        return redirect(route('Travelpack'))->with('success', ' updated successfully.'); 
    }
    public function Delete(Request $request,$id)
    {
        Package::find($id)->delete();
        return redirect()->back()->with('success', ' Deleted successfully.');
    }
}
