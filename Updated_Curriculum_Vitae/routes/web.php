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

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Show Choice Form
Route::get('/choice', [CurriculumVitaeController::class, 'choice'])->middleware('auth');

// Show Create Experience Form
Route::get('/create/experience', [CurriculumVitaeController:: class, 'createExp'])->middleware('auth');

// Store Experience Data
Route::post('/experiences', [CurriculumVitaeController::class, 'storeExp'])->middleware('auth');

// Show Create Education Form
Route::get('create/education', [CurriculumVitaeController::class, 'createEdu'])->middleware('auth');

// Store Education Data
Route::post('/educations', [CurriculumVitaeController::class, 'storeEdu'])->middleware('auth');

// Show Create Courses Form
Route::get('create/courses', [CurriculumVitaeController::class, 'createCrs'])->middleware('auth');

// Store Course Data
Route::post('/courses', [CurriculumVitaeController::class, 'storeCrs'])->middleware('auth');

// Show Single Experience
Route::get('/experience/{experience}', [CurriculumVitaeController::class, 'showExp']);

// Show Single Education
Route::get('/education/{education}', [CurriculumVitaeController::class, 'showEdu']);

// Show Single Courses
Route::get('/courses/{courses}', [CurriculumVitaeController::class, 'showCrs']);

// Manage Database Input
Route::get('manage', [CurriculumVitaeController::class, 'manage'])->middleware('auth');