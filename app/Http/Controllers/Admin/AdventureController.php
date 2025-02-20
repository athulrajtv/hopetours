<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AdventureController extends Controller
{
    public function Adventure()
    {
        $data = Activity::all();
        return view('admin.adventure.activities', compact('data'));
    }
    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'head' => 'required|string|max:80',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=400,height=500',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // File upload handling
        $file = $request->file('image');
        $path = $file ? Storage::disk('uploads')->put('activities', $file) : null;

        // Save student data to database
        Activity::create([
            'head' => $request->head,
            'image' => $path,
        ]);
        return redirect()->back()->with('success', 'Package record created successfully.');
    }
    public function Editpage(Request $request, $id)
    {
        $data = Activity::find($id);
        return view('admin.adventure.editadventure', compact('data'));
    }
    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'head' => 'required|string|max:80',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048|dimensions:width=400,height=500',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Activity::find($id);
        $file = $request->file('image');
        if($file)
        {
            //Delete old image if exists
            if($data->image)
            {
                Storage::disk('uploads')->delete($data->image);
            }
            $path = Storage::disk('uploads')->put('activities',$request->image);
        }
        else
        {
            $path = $data->image;
        }
        $data->Update([
            'head' => $request->head,
            'image' => $path,
        ]);
        return redirect(route('Adventure'))->with('success', ' updated successfully.'); 
    }
    public function Delete(Request $request,$id)
    {
        Activity::find($id)->delete();
        return redirect()->back()->with('success', ' Deleted successfully.');
    }
}
