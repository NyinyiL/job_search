<?php

use App\Models\User ;
use App\Models\Listing ;
use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\MailController;
use App\Mail\Testmail ;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Common Resource Route
//index - show all listing
//show - show single listing
//create - show form to create new listing
//store - store new listing
//edit - show form to edit listing
//update - update listing
//delete - delete listing

// Route::get('/sweet', function() {
//     Alert::toast('Banners delete successful', 'Toast Type');
    
//     // Alert::html('Html Title', 'Html Code', 'Type');
//     return view('welcome');
// }) ;

// All Listing
Route::get('/', [ListingController::class, 'index']); 



// show create form
Route::get("/listings/create", [ListingController::class, 'create'])->middleware('auth');

//Store listing data
Route::post('/listings', [ListingController::class, 'store']) ;

//manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage']) ; 

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']) ;
// Same function
//    $listing = Listing::find($id) ;

//    if($listing) {
//        return view('listing', [
//            'listing' => $listing
//        ]) ;
//    } else {
//        abort('404') ;
//    }

// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']) ;

// show update form
Route::put('/listings/{listing}', [ListingController::class, 'update']) ;

// show update form
Route::delete('/listings/{listing}', [ListingController::class, 'delete']) ;

// show create form
Route::get("/listings/create", [ListingController::class, 'create']) ;

//Show Regsiter/Create Form 
Route::get('/register', [UserController::class, 'create']) ;

//Create New User
Route::post('/users', [UserController::class, 'store']) ;

//User Logout
Route::post('/logout', [UserController::class, 'logout']) ;

//User Login form
Route::get('/login', [UserController::class, 'login'])->name('login') ;

//user login 
// Route::post('/users/authenticate', [UserController::class, 'authenticate']) ;


// Route::get('/mail', function () {
//     $user = User::find(4) ;
//     Mail::to($user)->send(new Testmail()) ;
//  }) ;

 Route::get('/mail', [MailController::class, 'send']) ;

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
