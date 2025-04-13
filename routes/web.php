<?php

use App\Http\Controllers\AccueilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

use App\Http\Controllers\ProduitController;

Route::get('/', [AccueilController::class, 'index']);
