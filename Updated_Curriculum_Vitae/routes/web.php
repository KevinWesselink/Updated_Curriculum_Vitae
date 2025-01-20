<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SoftSkillController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\ProgrammingController;
use App\Http\Controllers\CurriculumVitaeController;

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

/*
  Common Routes
*/

// View homepage
Route::get('/', [CurriculumVitaeController::class, 'index']); // Toont de hoofdpagina van de website

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest'); // Formulier om een nieuwe gebruiker te registreren

// Create New User
Route::post('/users', [UserController::class, 'store'])->name('storeUser'); // Opslaan van een nieuwe gebruiker

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth'); // Uitloggen van een ingelogde gebruiker

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest'); // Formulier om in te loggen

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('loginUser'); // Authenticatie van een gebruiker

// Request New Password Form
Route::get('/forgot-password', [UserController::class, 'forgotPassword'])->name('forgotPassword')->middleware('guest'); // Formulier om een nieuw wachtwoord aan te vragen

// Request New Password
Route::post('/forgot-password', [UserController::class, 'sendPasswordResetLink'])->name('sendPasswordResetLink')->middleware('guest'); // Verstuur een link om een nieuw wachtwoord aan te vragen

// Reset Password Form
Route::get('/reset-password/{token}', [UserController::class, 'resetPassword'])->name('resetPassword')->middleware('guest'); // Formulier om een wachtwoord te resetten

// Reset Password
Route::put('/update-password/{user}', [UserController::class, 'updatePassword'])->name('updatePassword')->middleware('guest'); // Wachtwoord resetten

// Show Choice Form
Route::get('/choice', [CurriculumVitaeController::class, 'choice'])->name('choice')->middleware('auth'); // Keuzeformulier voor gebruikers



/*
  Experience Routes
*/

// Create Experience
Route::get('/create/experience', [ExperienceController::class, 'createExperience'])->name('createExperience')->middleware('auth'); // Formulier om werkervaring toe te voegen
Route::post('/experiences', [ExperienceController::class, 'storeExperience'])->name('storeExperience')->middleware('auth'); // Opslaan van werkervaring

// Show Experience
Route::get('/experience/{experience}', [ExperienceController::class, 'showExperience'])->name('showExperience'); // Details van een specifieke werkervaring

// Edit Experience
Route::get('/experience/{experience}/edit', [ExperienceController::class, 'editExperience'])->name('editExperience')->middleware('auth'); // Formulier om werkervaring te bewerken
Route::put('/experience/{experience}', [ExperienceController::class, 'updateExperience'])->name('updateExperience')->middleware('auth'); // Werkervaring bijwerken
Route::delete('/experience/{experience}/delete', [ExperienceController::class, 'destroyExperience'])->name('destroyExperience')->middleware('auth'); // Werkervaring verwijderen



/*
  Education Routes
*/

// Create Education
Route::get('create/education', [EducationController::class, 'createEducation'])->name('createEducation')->middleware('auth'); // Formulier om een opleiding toe te voegen
Route::post('/educations', [EducationController::class, 'storeEducation'])->name('storeEducation')->middleware('auth'); // Opslaan van een opleiding

// Show Education
Route::get('/education/{education}', [EducationController::class, 'showEducation'])->name('showEducation'); // Details van een specifieke opleiding

// Edit Education
Route::get('/education/{education}/edit', [EducationController::class, 'editEducation'])->name('editEducation')->middleware('auth'); // Formulier om een opleiding te bewerken
Route::put('/education/{education}', [EducationController::class, 'updateEducation'])->name('updateEducation')->middleware('auth'); // Opleiding bijwerken
Route::delete('/education/{education}/delete', [EducationController::class, 'destroyEducation'])->name('destroyEducation')->middleware('auth'); // Opleiding verwijderen



/*
  Course Routes
*/

// Create Course
Route::get('create/course', [CourseController::class, 'createCourse'])->name('createCourse')->middleware('auth'); // Formulier om een cursus toe te voegen
Route::post('/course', [CourseController::class, 'storeCourse'])->name('storeCourse')->middleware('auth'); // Opslaan van een cursus

// Show Course
Route::get('/course/{course}', [CourseController::class, 'showCourse'])->name('showCourse'); // Details van een specifieke cursus

// Edit Course
Route::get('/course/{course}/edit', [CourseController::class, 'editCourse'])->name('editCourse')->middleware('auth'); // Formulier om een cursus te bewerken
Route::put('/course/{course}', [CourseController::class, 'updateCourse'])->name('updateCourese')->middleware('auth'); // Cursus bijwerken
Route::delete('/course/{course}/delete', [CourseController::class, 'destroyCourse'])->name('destroyCourse')->middleware('auth'); // Cursus verwijderen



/*
  Internship Routes
*/

// Create Internship
Route::get('/create/internship', [InternshipController::class, 'createInternship'])->name('createInternship')->middleware('auth'); // Formulier om een stage toe te voegen
Route::post('internship', [InternshipController::class, 'storeInternship'])->name('storeInternship')->middleware('auth'); // Opslaan van een stage

// Show Internship
Route::get('internship/{internship}', [InternshipController::class, 'showInternship'])->name('showInternship'); // Details van een specifieke stage

// Edit Internship
Route::get('/internship/{internship}/edit', [InternshipController::class, 'editInternship'])->name('editInternship')->middleware('auth'); // Formulier om een stage te bewerken
Route::put('/internship/{internship}', [InternshipController::class, 'updateInternship'])->name('updateInternship')->middleware('auth'); // Stage bijwerken
Route::delete('/internship/{internship}/delete', [InternshipController::class, 'destroyInternship'])->name('destroyInternship')->middleware('auth'); // Stage verwijderen



/*
  Programming Routes
*/

// Create Programming
Route::get('/create/programming', [ProgrammingController::class, 'createProgramming'])->name('createProgramming')->middleware('auth'); // Formulier om programmeervaardigheden toe te voegen
Route::post('/programming', [ProgrammingController::class, 'storeProgramming'])->name('storeProgramming')->middleware('auth'); // Opslaan van programmeervaardigheden

// Edit Programming
Route::get('/programming/{programming}/edit', [ProgrammingController::class, 'editProgramming'])->name('editProgramming')->middleware('auth'); // Formulier om programmeervaardigheden te bewerken
Route::put('/programming/{programming}', [ProgrammingController::class, 'updateProgramming'])->name('updateProgramming')->middleware('auth'); // Programmeervaardigheden bijwerken
Route::delete('/programming/{programming}/delete', [ProgrammingController::class, 'destroyProgramming'])->name('destroyProgramming')->middleware('auth'); // Programmeervaardigheden verwijderen



/*
  Soft Skill Routes
*/

// Create Soft Skill
Route::get('/create/softSkill', [SoftSkillController::class, 'createSoftSkill'])->name('createSoftSkill')->middleware('auth'); // Formulier om soft skill toe te voegen
Route::post('/softSkill', [SoftSkillController::class, 'storeSoftSkill'])->name('storeSoftSkill')->middleware('auth'); // Opslaan van soft skill

// Edit Soft Skill
Route::get('/softskill/{softskill}/edit', [SoftSkillController::class, 'editSoftSkill'])->name('editSoftSkill')->middleware('auth'); // Formulier om soft skill te bewerken
Route::put('/softskill/{softskill}', [SoftSkillController::class, 'updateSoftSkill'])->name('updateSoftSkill')->middleware('auth'); // Soft skill bijwerken
Route::delete('/softskill/{softskill}/delete', [SoftSkillController::class, 'destroySoftSkill'])->name('destroySoftSkill')->middleware('auth'); // Soft skill verwijderen



/*
  Project Routes
*/

// Create Project
Route::get('/create/project', [ProjectController::class, 'createProject'])->name('createProject')->middleware('auth'); // Formulier om een project toe te voegen
Route::post('/project', [ProjectController::class, 'storeProject'])->name('storeProject')->middleware('auth'); // Opslaan van een project

// Show Project
Route::get('/project/{project}', [ProjectController::class, 'showProject'])->name('showProject'); // Details van een specifiek project

// Edit Project
Route::get('/project/{project}/edit', [ProjectController::class, 'editProject'])->name('editProject')->middleware('auth'); // Formulier om een project te bewerken
Route::put('/project/{project}', [ProjectController::class, 'updateProject'])->name('updateProject')->middleware('auth'); // Project bijwerken
Route::delete('/project/{project}/delete', [ProjectController::class, 'destroyProject'])->name('destroyProject')->middleware('auth'); // Project verwijderen



/*
  Navigation Bar Pages
  Routes for navigation-related pages, including search and about sections.
*/

// Open Search Page (view to search for data)
Route::get('/search', [SearchController::class, 'openSearchPage'])->name('searchPage');

// Perform Search and Show Results
Route::get('/search/results', [SearchController::class, 'search'])->name('search');

// Show About Page for a Specific User
Route::get('/about/user/{user}', [CurriculumVitaeController::class, 'aboutUser'])->name('aboutUser');

// Show About Page for the Curriculum Vitae
Route::get('/about/curriculumvitae', [CurriculumVitaeController::class, 'aboutCV'])->name('aboutCV');

// Manage Database Inputs for the Specified User
Route::get('/manage/{user}', [CurriculumVitaeController::class, 'manage'])->name('manage')->middleware('auth');

// Switch Application Language
Route::post('lang', [LanguageController::class, 'switchLang'])->name('lang.switch');



/*
  Export
  Routes related to exporting data, such as users.
*/

// Export All Users (CSV or Excel)
Route::get('export-users', [UserController::class, 'userExport'])->name('exportUsers');



/*
  User Profile
  Routes for managing user profiles, settings, and profile access.
*/

// Show Edit Form for User Profile
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('editUser')->middleware('auth');

// Update User Profile Details
Route::put('/user/{user}', [UserController::class, 'update'])->name('updateUser')->middleware('auth');

// Show User Settings Page
Route::get('/settings', [UserController::class, 'settings'])->name('settings')->middleware('auth');

// Update User Settings
Route::put('/settings', [UserController::class, 'updateSettings'])->name('updateSettings')->middleware('auth');

// Request Access to a User's Profile
Route::get('/request/{user}', [UserController::class, 'requestAccess'])->name('requestAccess')->middleware('auth');

// Show Form to Manage Profile Access for a Specific User
Route::get('/manage/{user}/access', [UserController::class, 'manageProfileAccess'])->name('manageProfileAccess')->middleware('auth');

// Manage Access to a User's Profile
Route::put('/request/{user}', [UserController::class, 'manageAccess'])->name('manageAccess')->middleware('auth');

// Approve a Profile Access Request
Route::post('/profile-access-requests/{id}/approve', [UserController::class, 'approve'])->name('profile.access.approve')->middleware('auth');

// Reject a Profile Access Request
Route::post('/profile-access-requests/{id}/reject', [UserController::class, 'reject'])->name('profile.access.reject')->middleware('auth');
