<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\bgController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\LocalizationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// --------------------------Language Routs--------------------------------------
Route::get("/locale/{locale}", [LocalizationController::class, 'setLang']);


//--------------------- HOME ---------------------------------
Route::get('showhome', [HomeController::class, 'showhome'])->name('showhome');
Route::post('storeemail', [HomeController::class, 'store']);
Route::get('showmember', [HomeController::class, 'showmember']);
Route::get('mem/{id}/delete', [HomeController::class, 'destroy']);


//--------------------- ABOUT ---------------------------------
Route::get('showabout', [AboutController::class, 'showabout']);
Route::get('companyinfo', [AboutController::class, 'companyinfo'])->name('allinfo');
Route::post('storecompany', [AboutController::class, 'store']);
Route::get('info/{id}/edit', [AboutController::class, 'edit']);
Route::post('/info/{id}/update', [AboutController::class, 'update']);
Route::get('info/{id}/delete', [AboutController::class, 'destroy']);


//--------------------- OFFER ---------------------------------
Route::get('showoffer', [OfferController::class, 'showoffer']);
Route::get('alloffer', [OfferController::class, 'alloffer'])->name('offers');
Route::get('offer', [OfferController::class, 'index']);
Route::post('storeoffer', [OfferController::class, 'store']);
Route::get('offer/{id}/edit', [OfferController::class, 'edit']);
Route::post('/offer/{id}/update', [OfferController::class, 'update']);
Route::get('offer/{id}/delete', [OfferController::class, 'destroy']);


//--------------------- CONTACT ---------------------------------
Route::get('showcontact', [ContactController::class, 'showcontact']);
Route::Post('storecontact', [ContactController::class, 'store']);
Route::get('msgs', [ContactController::class, 'showmsgs']);
Route::get('allmsgs/{id}/delete', [ContactController::class,'destroy']);



//--------------------- ORDER ---------------------------------
Route::get('showorder', [OrderController::class, 'showorder']);
Route::post('/storeorder', [OrderController::class, 'store']);
Route::get('{id}/order', [OrderController::class, 'order']);
Route::get('vieworder', [OrderController::class, 'vieworder'])->name('orders');
Route::get('order/{id}/delete', [OrderController::class, 'destroy']);
Route::get('/order/{id}', [OrderController::class, 'orderpro']);


//--------------------- Catagory ---------------------------------
Route::get('showcatagory', [CatagoryController::class, 'showcatagory']);
Route::get('addcatagory', [CatagoryController::class, 'addcatagory'])->name('allct');
Route::POST('storecatagory', [CatagoryController::class, 'store']);
Route::get('allct/{id}/edit', [CatagoryController::class, 'edit']);
Route::post('/allct/{id}/update', [CatagoryController::class, 'update']);
Route::get('allct/{id}/delete', [CatagoryController::class, 'destroy']);
Route::get('allct/{id}/show', [CatagoryController::class, 'show']);



//--------------------- SERVICE ---------------------------------
Route::get('service', [ServiceController::class, 'index'])->name('service');
Route::post('storeservice', [ServiceController::class, 'store']);
Route::get('service/{id}/edit', [ServiceController::class, 'edit']);
Route::post('/service/{id}/update', [ServiceController::class, 'update']);
Route::get('service/{id}/delete', [ServiceController::class, 'destroy']);



//--------------------- PRODUCT ---------------------------------
Route::get('addproduct', [ProductController::class, 'index']);
Route::get('products', [ProductController::class, 'showproducts'])->name('allproducts');
Route::post('storeproducts', [ProductController::class, 'store']);
Route::get('pro{id}/feature', [ProductController::class, 'feature']);
Route::get('pro/{id}/delete', [ProductController::class, 'destroy']);
Route::get('pro/{id}/edit', [ProductController::class, 'edit']);
Route::post('/pro/{id}/update', [ProductController::class, 'update']);



//--------------------- TESTIMONIAL ---------------------------------
Route::post('storetest', [TestimonialController::class, 'store']);
Route::get('test', [TestimonialController::class, 'index']);
Route::get('rev/{id}', [TestimonialController::class, 'update']);
Route::get('rev/{id}/delete', [TestimonialController::class, 'destroy']);




//---------------------------------------------------------------
//
//---------------Backend ----------------------------------------
//
//--------------------------------------------------------------






//--------------------- Dahsboard ---------------------------------
Route::get('/dashboard', [DashboardController::class, 'index']);


//--------------------- BGImages ---------------------------------
Route::get('addbgimg', [bgController::class, 'index']);
Route::post('storebgimg', [bgController::class, 'store']);
Route::get('allphoto/{id}/delete', [bgController::class, 'destroy']);



Route::get('/', [HomeController::class, 'showhome']);
// Route::get('/', function () {
//     return view('layouts.nav');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



