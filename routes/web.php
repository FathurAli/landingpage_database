<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\portfolioController;

//View Controller
Route::get('/', [homeController::class, 'index']);
Route::get('/about', [aboutController::class, 'index']);
Route::get('/services', [servicesController::class, 'index']);
Route::get('/portfolio-1', [portfolioController::class, 'index']);
Route::get('/single-project', [portfolioController::class, 'project']);
Route::get('/single-project-2', [portfolioController::class, 'project2']);
Route::get('/blog-1', [blogController::class,'index']);
Route::get('/contact', [contactController::class, 'index']);