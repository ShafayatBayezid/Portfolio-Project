<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
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
//page controllers
Route::get( '/', [HomeController::class, 'pageLoading'] );
Route::get( '/projects', [ProjectController::class, 'pageLoading'] );
Route::get( '/resume', [ResumeController::class, 'pageLoading'] );
Route::get( '/contact', [ContactController::class, 'pageLoading'] );

// AJAX call controllers
Route::get( '/heroData', [HomeController::class, 'getHeroData'] );
Route::get( '/aboutData', [HomeController::class, 'getAboutData'] );
Route::get( '/socialData', [HomeController::class, 'getSocialData'] );
Route::get( '/projectsData', [ProjectController::class, 'getProjectsData'] );
Route::get( '/resumeLink', [ResumeController::class, 'resumeLink'] );
Route::get( '/experiencesData', [ResumeController::class, 'getExperiencesData'] );
Route::get( '/educationsData', [ResumeController::class, 'getEducationsData'] );
Route::get( '/skillsData', [ResumeController::class, 'getSkillsData'] );
Route::get( '/languagesData', [ResumeController::class, 'getLanguagesData'] );
Route::post( '/contactRequest', [ContactController::class, 'manageContactRequest'] );

//Upload Data to Database
Route::post( '/uploadHeroData', [HomeController::class, 'uploadHeroData'] );