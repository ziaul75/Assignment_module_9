<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home']);
Route::get('/about', [PortfolioController::class, 'about']);
Route::get('/projects', [PortfolioController::class, 'projects']);
Route::get('/contact', [PortfolioController::class, 'contact']);
Route::post('/contact', [PortfolioController::class, 'submitContact'])->name('contact.submit');


Route::get('/', function () {
    return view('welcome');
});
