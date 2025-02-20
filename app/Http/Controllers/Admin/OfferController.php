<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    public function Offerimage()
    {
        $data = Offer::all();
        return view('admin.offer.offerimage', compact('data'));
    }
    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=600,height=400',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // File upload handling
        $file = $request->file('image');
        $path = $file ? Storage::disk('uploads')->put('Offer', $file) : null;

        // Save student data to database
        Offer::create([
            'image' => $path,
        ]);
        return redirect()->back()->with('success', 'Package record created successfully.');
    }
    public function Editpage(Request $request, $id)
    {
        $data = Offer::find($id);
        return view('admin.offer.editofferimage', compact('data'));
    }
    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=600,height=400',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Offer::find($id);
        $file = $request->file('image');
        if($file)
        {
            //Delete old image if exists
            if($data->image)
            {
                Storage::disk('uploads')->delete($data->image);
            }
            $path = Storage::disk('uploads')->put('offer',$request->image);
        }
        else
        {
            $path = $data->image;
        }
        $data->Update([
            'image' => $path,
        ]);
        return redirect(route('Offerimage'))->with('success', ' updated successfully.'); 
    }
    public function Delete(Request $request,$id)
    {
        Offer::find($id)->delete();
        return redirect()->back()->with('success', ' Deleted successfully.');
    }
}
