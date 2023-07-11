<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post');
});


/**
 * route resource posts
 */
Route::resource('/posts', App\Http\Controllers\PostController::class);