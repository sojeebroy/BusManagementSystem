<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusController;



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

Route::get('/', function () {
    return view('welcome');
});
//admin
Route::get('/adminprofile/{email}',[AdminController::class,'profile'])->middleware('CheckLogin');
Route::get('/admindashboard',[AdminController::class,'dashboard'])->middleware('CheckLogin');
Route::get('/adminprofileedit/{id}',[AdminController::class,'EditProfile'])->middleware('CheckLogin');
Route::post('/adminprofile/{id}',[AdminController::class,'update'])->middleware('CheckLogin');

Route::get('/adminregistration', [AdminController::class, 'view'])->middleware('CheckLogin');
Route::post('/adminregistration', [AdminController::class, 'registration'])->middleware('CheckLogin');

//driver

Route::get('/alldrivers',[DriverController::class,'AllDrivers'])->middleware('CheckLogin');
Route::get('/deletedriver/{id}',[DriverController::class,'Delete'])->middleware('CheckLogin');
Route::get('/driverregistration', function () {
    return view('DriverRegistration');
});



//user
Route::get('/userregistration', [UserController::class, 'view']);
Route::post('/userregistration', [UserController::class, 'registration']);
Route::get('/userprofile/{id}',[UserController::class,'profile'])->name('userprofile')->middleware('CheckLogin');
Route::get('/allusers',[UserController::class,'AllUsers'])->middleware('CheckLogin');
Route::get('/edituserprofile/{id}',[UserController::class,'EditProfile'])->middleware('CheckLogin');
Route::post('/allusers/{id}',[UserController::class,'update'])->middleware('CheckLogin');
Route::get('/deleteuser/{id}',[UserController::class,'Delete'])->middleware('CheckLogin');


//driver
// Route::get('driverregistration', [DriverController::class, 'view'])->middleware('CheckLogin');
// Route::post('driverregistration', [DriverController::class, 'registration'])->middleware('CheckLogin');
Route::get('driverprofile/{id}', [DriverController::class, 'profile'])->name('driverprofile')->middleware('CheckLogin');
Route::get('editdriverprofile/{id}',[DriverController::class,'EditProfile'])->middleware('CheckLogin');
Route::post('driverprofile/{id}',[DriverController::class,'update'])->middleware('CheckLogin');
Route::get('logout/{id}',[DriverController::class,'logout']);
Route::get('home',[DriverController::class,'home']);
Route::get('/driverregistration', function () {
    return view('DriverRegistration');
});


//login
Route::get('/login',[LoginController::class,'login']);
Route::post('/login', [LoginController::class,'checkLogin']);
//logout
Route::get('/logout',[LoginController::class,'logout']);


//bus
Route::get('/busregistration', [BusController::class, 'view']);
Route::post('/busregistration', [BusController::class, 'registration']);
Route::get('/allbuses',[BusController::class,'AllBuses']);
Route::get('/editbus/{id}',[BusController::class,'EditBus'])->name('editbus');
Route::post('/editbus/{id}',[BusController::class,'update'])->name('editbus');
Route::get('/deletebus/{id}',[BusController::class,'Delete']);
