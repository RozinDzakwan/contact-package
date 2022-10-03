<?php

use Illuminate\Support\Facades\Route;
use Rozin\Contact\Http\Controllers\ContactController;
use Rozin\Contact\Http\Controllers\HomeController;


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send']);
Route::get('/login', [HomeController::class, 'viewLogin'])->name('login');
Route::post('/login', [HomeController::class, 'login']);
Route::get('/register', [HomeController::class, 'viewRegister'])->name('register');
Route::post('/register', [HomeController::class, 'register']);
