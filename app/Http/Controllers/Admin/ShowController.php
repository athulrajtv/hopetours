<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use App\Models\Image;
use App\Models\Page;
use App\Models\Travel;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function Show(Request $request, $id)
    {
        $record = Travel::find($id);
        $data = Image::find($id);
        // Check if the record exists
        if (!$record) {
            return redirect()->back()->with('error', 'Record not found');
        }

        // Retrieve all images associated with this Travel record
        $images = Image::where('gallery_id', $id)->get();

        return view('guest.showpackages', compact('record','images'));
    }
}
