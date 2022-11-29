<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/prueba',function (){
    return 'hola LARAVEL. Backend developed by Israel Eskape';
});

Route::get('hotelStatusEntitys',[\App\Http\Controllers\hotelStatusEntityController::class,'index']);
Route::get('hotelStatusEntitys/{hotelStatusEntity}',[\App\Http\Controllers\hotelStatusEntityController::class,'show']);

Route::get('hotelRoomCategorys',[\App\Http\Controllers\hotelRoomCategoryController::class,'index']);
Route::get('hotelRoomCategorys/categorys',[\App\Http\Controllers\hotelRoomCategoryController::class,'indexActivo']);
Route::get('hotelRoomCategorys/{hotelRoomCategory}',[\App\Http\Controllers\hotelRoomCategoryController::class,'show']);
Route::delete('hotelRoomCategorys/{hotelRoomCategory}',[\App\Http\Controllers\hotelRoomCategoryController::class,'detroy']);

Route::get('hotelTypeRooms',[\App\Http\Controllers\hotelTypeRoomController::class,'index']);
Route::get('hotelTypeRooms/categorys',[\App\Http\Controllers\hotelTypeRoomController::class,'indexActivo']);
Route::get('hotelTypeRooms/{hotelTypeRoom}',[\App\Http\Controllers\hotelTypeRoomController::class,'show']);
Route::delete('hotelTypeRooms/{hotelTypeRoom}',[\App\Http\Controllers\hotelTypeRoomController::class,'detroy']);