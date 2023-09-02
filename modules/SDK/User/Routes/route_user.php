<?php

use Illuminate\Support\Facades\Route;
use Mod\SDK\User\Http\Controllers\ModUserController;

Route::middleware('web')->prefix('sdk')->group(function () {
    Route::get('/user', [ModUserController::class, 'index']);
});
