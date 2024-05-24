<?php

use App\Http\Controllers\api\v1\ArtisteController;
use App\Http\Controllers\api\v1\DonController;
use App\Http\Controllers\api\v1\ProjetController;
use App\Http\Controllers\api\v1\SonController;
use App\Http\Controllers\api\v1\UserController;
use App\Http\Controllers\api\v1\VoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(
    ['prefix'=>'v1'],
    function(){
        Route::apiResource('artistes', ArtisteController::class);
        Route::apiResource('dons', DonController::class);
        Route::apiResource('projets', ProjetController::class);
        Route::apiResource('sons',SonController::class);
        Route::apiResource('users', UserController::class);
        Route::apiResource('votes', VoteController::class);
    }
);