<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\HomeController;


Route::get('/', function () {
    return redirect()->route('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

