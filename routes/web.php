<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdventureController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\DetailpageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\Admin\PagedetailsController;
use App\Http\Controllers\Admin\PlacedetailController;
use App\Http\Controllers\Admin\PlaceimageController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ShowController;
use App\Http\Controllers\Admin\TabController;
use App\Http\Controllers\Admin\TabdetailsController;
use App\Http\Controllers\Admin\TravelpackController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Guest\EmailController;
use App\Http\Controllers\Guest\GuestController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::prefix('admin')->group(function(){
    Route::get ('/', [AuthController::class, 'login'])->name('admin.auth.login');
    Route::post('/login', [AuthController::class, 'post_login'])->name('admin.login.submit');
    Route::get ('/register', [AuthController::class, 'register'])->name('admin.auth.register');
    Route::post('/register', [AuthController::class, 'post_register'])->name('admin.register.submit');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


    Route::get('travelpack', [TravelpackController::class, 'Travelpack'])->name('Travelpack');
    Route::post('/create', [TravelpackController::class, 'Create'])->name('admin.package.creates');
    Route::get('/edit/{id}', [TravelpackController::class, 'Edit'])->name('admin.package.edit');
    Route::post('/update/{id}', [TravelpackController::class, 'Update'])->name('admin.package.update');
    Route::get('/delete/{id}', [TravelpackController::class, 'Delete'])->name('admin.package.delete');


});

Route::prefix('recommended')->group(function(){
    Route::get('/place', [PlaceimageController::class, 'Place'])->name('Places');
    Route::post('/create', [PlaceimageController::class, 'Create'])->name('admin.recommended.create');
    Route::get('/editpage/{id}', [PlaceimageController::class, 'Editpage'])->name('admin.recommended.Editpage');
    Route::post('/update/{id}', [PlaceimageController::class, 'Update'])->name('admin.recommended.update');
    Route::get('/delete/{id}', [PlaceimageController::class, 'Delete'])->name('admin.recommended.delete');
});

Route::prefix('adventure')->group(function(){
    Route::get('/adventure', [AdventureController::class, 'Adventure'])->name('Adventure');
    Route::post('/create', [AdventureController::class, 'Create'])->name('admin.adventure.create');
    Route::get('/editpage/{id}', [AdventureController::class, 'Editpage'])->name('admin.adventure.Editpage');
    Route::post('/update/{id}', [AdventureController::class, 'Update'])->name('admin.adventure.update');
    Route::get('/delete/{id}', [AdventureController::class, 'Delete'])->name('admin.adventure.delete');
});

Route::prefix('gallery')->group(function(){
    Route::get('/gallery', [GalleryController::class, 'Gallery'])->name('Gallerypage');
    Route::post('/create', [GalleryController::class, 'Create'])->name('admin.gallery.create');
    Route::get('/editpage/{id}', [GalleryController::class, 'Editpage'])->name('admin.gallery.Editpage');
    Route::post('/update/{id}', [GalleryController::class, 'Update'])->name('admin.gallery.update');
    Route::get('/delete/{id}', [GalleryController::class, 'Delete'])->name('admin.gallery.delete');
});



Route::prefix('offer')->group(function(){
    Route::get('/offerimage', [OfferController::class, 'Offerimage'])->name('Offerimage');
    Route::post('/create', [OfferController::class, 'Create'])->name('admin.offer.create');
    Route::get('/editpage/{id}', [OfferController::class, 'Editpage'])->name('admin.offer.Editpage');
    Route::post('/update/{id}', [OfferController::class, 'Update'])->name('admin.offer.update');
    Route::get('/delete/{id}', [OfferController::class, 'Delete'])->name('admin.offer.delete');
});



Route::prefix('guest')->group(function(){
    Route::get('experiance',[GuestController::class, 'Experiance'])->name('Experiance');
    Route::get('package',[GuestController::class, 'Package'])->name('Package');
    Route::get('gallery',[GuestController::class, 'Gallery'])->name('Gallery');
    Route::get('contact',[GuestController::class, 'Contact'])->name('Contact');
    Route::get('packageDetails',[GuestController::class, 'PackageDetails'])->name('PackageDetails');
    Route::get('packageDetails1',[GuestController::class, 'PackageDetails1'])->name('PackageDetails1');
});

Route::prefix('packages')->group(function(){
    Route::get('/packages',[PackagesController::class, 'Packages'])->name('Packages');
    Route::post('/create', [PackagesController::class, 'Create'])->name('admin.packages.create');
    Route::get('/editpage/{id}', [PackagesController::class, 'Editpage'])->name('admin.packages.Editpage');
    Route::post('/update/{id}', [PackagesController::class, 'Update'])->name('admin.packages.update');
    Route::get('/delete/{id}', [PackagesController::class, 'Delete'])->name('admin.packages.delete'); 
});

Route::prefix('video')->group(function(){
    Route::get('/videos', [VideoController::class, 'Videos'])->name('Videos');
    Route::post('/create', [VideoController::class, 'Create'])->name('admin.videos.create');
    Route::get('/editpage/{id}', [VideoController::class, 'Editpage'])->name('admin.videos.Editpage');
    Route::post('/update/{id}', [VideoController::class, 'Update'])->name('admin.video.update');
    Route::get('/delete/{id}', [VideoController::class, 'Delete'])->name('admin.video.delete'); 
});


Route::prefix('testmonial')->group(function(){
    Route::get('/testmonialpage', [ReviewController::class, 'Review'])->name('testmonial');
    Route::post('/create', [ReviewController::class, 'Create'])->name('admin.testmonial.create');
    Route::get('/editpage/{id}', [ReviewController::class, 'Editpage'])->name('admin.testmonial.Editpage');
    Route::post('/update/{id}', [ReviewController::class, 'Update'])->name('admin.testmonial.update');
    Route::get('/delete/{id}', [ReviewController::class, 'Delete'])->name('admin.testmonial.delete');
});


Route::get('/',[GuestController::class, 'Index'])->name('index');
Route::post('/contact', [EmailController::class, 'sendContactMail'])->name('contact');
Route::get('/packagedetails/{id}', [ShowController::class, 'Show'])->name('Show');

