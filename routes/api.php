<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAPIController;
use App\Http\Controllers\BusAPIContoller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Admin
Route::get('/users/list',[AdminAPIController::class,'UserList']);
Route::get('/admins/list',[AdminAPIController::class,'AdminList']);
Route::get('/admin/{id}',[AdminAPIController::class,'GetAdmin']);
Route::post('/admin/create',[AdminAPIController::class,'CreateAdmin']);
Route::post('/admin/edit/{id}',[AdminAPIController::class,'EditAdmin']);
Route::delete('/admin/delete/{id}',[AdminAPIController::class,'DeleteAdmin']);

//Bus
Route::get('/bus/list',[BusAPIContoller::class,'BusList']);
Route::get('/bus/{id}',[BusAPIContoller::class,'GetBus']);
Route::post('/bus/create',[BusAPIContoller::class,'CreateBus']);
Route::post('/bus/edit/{id}',[BusAPIContoller::class,'EditBus']);
Route::delete('/bus/delete/{id}',[BusAPIContoller::class,'DeleteBus']);
