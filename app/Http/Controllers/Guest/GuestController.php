<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function Index(Request $request)
    {
        $data = DB::table('packages')->get();
        $place = DB::table('places')->get();
        $activity = DB::table('activities')->get();
        $offerImage = DB::table('offers')->get();
        $item = DB::table('travels')->get();
        $test = DB::table('reviews')->get();
        $image = DB::table('reviews')->get();
        return view('guest.index', compact('data','place','activity','offerImage','item','test','image'));
    }

    public function Experiance()
    {
        $data = DB::table('videos')->get();
        return view('guest.experience', compact('data'));
    }

    public function Package()
    {
        $data = DB::table('travels')->get();
        $record = DB::table('details')->get();
        $items = DB::table('details')->get();
        return view('guest.packages', compact('data','record','items'));
    }

    public function Gallery()
    {
        $data = DB::table('galleries')->get();
        return view('guest.gallery', compact('data'));
    }

    public function Contact()
    {
        return view('guest.contact');
    }

    public function PackageDetails()
    {
        $tabcategory = DB::table('tabcategories')->get(); 
        return view('guest.packagedetails', compact('tabcategory'));
    }

    public function PackageDetails1()
    {
        return view('guest.packagedetails1');
    }

    
}
