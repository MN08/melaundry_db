<?php

use App\Http\Controllers\API\LaundryController;
use App\Http\Controllers\API\PromotionController;
use App\Http\Controllers\API\ShopController;
use App\Http\Controllers\API\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/promotion', [PromotionController::class, 'all']);
Route::get('/shop', [ShopController::class, 'all']);
Route::get('/laundry', [LaundryController::class, 'all']);
Route::get('/user', [UserController::class, 'all']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/promotion/limit', [PromotionController::class, 'promoLimit']);

    Route::get('/shop/recommendation/limit', [ShopController::class, 'shopRecommendationLimit']);
    Route::get('/shop/search/city/{name}', [ShopController::class, 'shopByCity']);

    Route::get('/laundry/user/{userID}', [LaundryController::class, 'getLaundryByUser']);
    Route::post('/laundry/claim', [LaundryController::class, 'claimUserLaundry']);

    Route::post('/logout', [UserController::class, 'logout']);
});
