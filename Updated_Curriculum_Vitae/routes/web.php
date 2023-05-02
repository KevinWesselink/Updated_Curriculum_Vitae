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

// Show Create Programming Form
Route::get('/create/programming', [CurriculumVitaeController::class, 'createProgramming'])->middleware('auth');

// Show Create SoftSkills Form
Route::get('/create/softSkills', [CurriculumVitaeController::class, 'createSoftSkills'])->middleware('auth');

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

// Show Edit Experience Form
Route::get('/experience/{experience}/edit', [CurriculumVitaeController::class, 'editExp'])->middleware('auth');

// Update Experience
Route::put('/experience/{experience}', [CurriculumVitaeController::class, 'updateExp'])->middleware('auth');

// Delete Experience
Route::delete('/experience/{experience}', [CurriculumVitaeController::class, 'destroyExp'])->middleware('auth');

// Show Edit Education Form
Route::get('/education/{education}/edit', [CurriculumVitaeController::class, 'editEdu'])->middleware('auth');

// Update Education
Route::put('/education/{education}', [CurriculumVitaeController::class, 'updateEdu'])->middleware('auth');

// Delete Education
Route::delete('/education/{education}', [CurriculumVitaeController::class, 'destroyEdu'])->middleware('auth');

// Show Edit Courses Form
Route::get('/courses/{courses}/edit', [CurriculumVitaeController::class, 'editCrs'])->middleware('auth');

// Update Courses
Route::put('/courses/{courses}', [CurriculumVitaeController::class, 'updateCrs'])->middleware('auth');

// Delete Courses
Route::delete('/courses/{courses}', [CurriculumVitaeController::class, 'destroyCrs'])->middleware('auth');

// About Owner Page
Route::get('/about/user', [CurriculumVitaeController::class, 'aboutUser']);

// About CurriculumVitae Page
Route::get('/about/curriculumvitae', [CurriculumVitaeController::class, 'aboutCV']);

// Manage Database Input
Route::get('/manage', [CurriculumVitaeController::class, 'manage'])->middleware('auth');