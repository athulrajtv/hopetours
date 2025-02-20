<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function Videos()
    {
        $data = Video::all();
        return view('admin.video.youtube', compact('data'));
    }
    public function Create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'link' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Save student data to database
        Video::create([
            'link' => $request->link,
        ]);
        return redirect()->back()->with('success', 'Package record created successfully.');
    }
    public function Editpage(Request $request, $id)
    {
        $data = Video::find($id);
        return view('admin.video.edityoutube', compact('data'));
    }
    public function Update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'link' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data = Video::find($id);
        
        $data->Update([
            'link' => $request->link,
        ]);
        return redirect(route('Videos'))->with('success', ' updated successfully.'); 
    }
    public function Delete(Request $request,$id)
    {
        Video::find($id)->delete();
        return redirect()->back()->with('success', ' Deleted successfully.');
    }
}
