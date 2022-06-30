<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('',[HomeController::class,'home'])->name('home');
Route::get('contact',[ContactController::class, 'contact'])->name('contact');
