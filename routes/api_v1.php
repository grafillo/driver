<?php

use App\Http\Controllers\Api\v1\CarController;
use App\Http\Controllers\Api\v1\DriverController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/car/all',  [CarController::class,'all']);
Route::post('/car/add',  [CarController::class,'addCar']);
Route::get('/car/show/{id}',  [CarController::class,'show']);
Route::put('/car/setdriver',  [CarController::class,'setDriver']);
Route::delete('/car/{id}',  [CarController::class,'delCar']);
Route::get('/car/free',  [CarController::class,'freeCar']);

Route::get('/driver/all',  [DriverController::class,'all']);
Route::post('/driver/add',  [DriverController::class,'addDriver']);
Route::get('/driver/show/{id}',  [DriverController::class,'show']);
Route::delete('/driver/{id}',  [DriverController::class,'delDriver']);
