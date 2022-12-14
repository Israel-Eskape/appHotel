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
Route::get('/',function (){
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


Route::get('peoples/{hotelPleople}',[\App\Http\Controllers\hotelPeopleController::class,'show']);





Route::group(['middleware' => ['guest']], function() {
    /**
     * Register Routes
     */
    Route::post('store',[\App\Http\Controllers\hotelPeopleController::class,'store']);
    Route::post('register',[\App\Http\Controllers\hotelPeopleController::class,'register']);

    /**
     * Login Routes
     */

    Route::post('login',[\App\Http\Controllers\loginController::class,'login']);
    Route::post('index',[\App\Http\Controllers\loginController::class,'index']);
});
Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Routes
     */
    Route::get('logout', [\App\Http\Controllers\LogoutController::class,'logout']);
});


