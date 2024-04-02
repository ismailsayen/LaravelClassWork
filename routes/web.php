<?php

use App\Http\Controllers\contrCrud;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/profiles',contrCrud::class);