<?php

use App\Http\Controllers\CurriculumVitaeController;
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

// View homepage
Route::get('/', [CurriculumVitaeController::class, 'index']);

// View registration form


// View login form