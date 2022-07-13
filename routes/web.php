<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'firstBlade']);
Route::get('/act', [HomeController::class, 'infoAct']);
