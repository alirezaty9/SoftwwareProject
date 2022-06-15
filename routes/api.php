<?php

use App\Http\Controllers\api\productApiController;
use App\Http\Controllers\api\categoryApiController;
use App\Http\Controllers\home\HomeController;
use App\Http\Resources\V1\categoryeResource;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('V1')->group(function(){

    Route::apiResource('/homepage/images' , HomeController::class);
    Route::apiResource('/homepage/products' , productApiController::class);
    Route::apiResource('/homepage/categories' , categoryApiController::class);

});
