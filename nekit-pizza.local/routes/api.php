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

Route::namespace('Api')->group(function () {
    Route::post('/get-channel', [\App\Http\Controllers\Api\ChannelController::class, 'get']);
    Route::post('/get-all-channels', [\App\Http\Controllers\Api\ChannelController::class, 'index']);

    Route::post('/get-video', [\App\Http\Controllers\Api\VideoController::class, 'get']);
    Route::post('/get-all-videos', [\App\Http\Controllers\Api\VideoController::class, 'index']);
    Route::post('/add-video-watch', [\App\Http\Controllers\Api\VideoController::class, 'watch']);
    Route::post('/upload-video', [\App\Http\Controllers\Api\VideoController::class, 'create']);

    Route::post('/auth', [\App\Http\Controllers\Api\LoginController::class, 'auth']);
    Route::post('/register', [\App\Http\Controllers\Api\RegisterController::class, 'create']);

    Route::post('/user-data', [\App\Http\Controllers\Api\UserController::class, 'get']);
    Route::post('/change-bg', [\App\Http\Controllers\Api\UserController::class, 'change_bg']);

    Route::post('/get-user-subscribe', [\App\Http\Controllers\Api\SubscribeController::class, 'index']);
    Route::post('/check-user-subscribe', [\App\Http\Controllers\Api\SubscribeController::class, 'check']);
    Route::post('/create-user-subscribe', [\App\Http\Controllers\Api\SubscribeController::class, 'create']);

    Route::post('/search', [\App\Http\Controllers\Api\SearchController::class, 'index']);

    Route::post('/test', [\App\Http\Controllers\Api\UserController::class, 'test']);
});



