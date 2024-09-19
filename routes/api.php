<?php
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\VilleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware("api")->group(function () {
    Route::resource("clients", ClientController::class);
});
Route::middleware("api")->group(function () {
    Route::resource("events", EventController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('hotels', HotelController::class);
});
Route::middleware("api")->group(function () {
    Route::resource("reservations", ReservationController::class);
});
Route::middleware("api")->group(function () {
    Route::resource("salles", SalleController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('villes', VilleController::class);
});


