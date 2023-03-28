<?php

use App\Http\Controllers\CurriculumVitaeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// View homepage
Route::get('/', [CurriculumVitaeController::class, 'index']);

// View registration form
Route::get('/register', [UserController::class, 'create']);

// View login form
Route::get('/login', [UserController::class, 'login']);