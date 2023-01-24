<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\UserController;

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

Route::get("features", [FeatureController::class, "getAllFeatures"]);
Route::post("new-feature", [FeatureController::class, "addNewFeature"]);

Route::get("partners", [PartnerController::class, "getAllPartners"]);
Route::post("new-partner", [PartnerController::class, "addNewPartner"]);

Route::get("users", [UserController::class, "getAllUsers"]);
Route::post("new-user", [UserController::class, "addNewUser"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
