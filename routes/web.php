<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\messageController;

//-----------------------------------------------------------------
Route::view('/', 'index')->name('index');

Route::post('/contacto', [messageController::class, 'store'])->name('contacto');
//-----------------------------------------------------------------