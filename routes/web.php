<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AccredidationController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\CollegeTeamController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['splade'])->group(function () {
    Route::get('/', fn () => view('home'))->name('home');

    Route::middleware(['auth'])->group(function () {
        Route::resource('/home', HomeController::class);
    });

    Route::resource('/apply', ApplyController::class);
    Route::resource('/courses', CourseController::class);
    Route::resource('/contacts', ContactController::class);
    Route::resource('/news', NewsController::class);
    Route::resource('/media', MediaController::class);
    Route::resource('/community', CommunityController::class);

    Route::resource('/aboutus', AboutUsController::class);
    Route::resource('/services', ServicesController::class);
    Route::resource('/accreditations', AccredidationController::class);
    Route::resource('/students', StudentController::class);
    Route::resource('/collegeteam', CollegeTeamController::class);


    Route::spladeWithVueBridge();
    Route::spladePasswordConfirmation();
    Route::spladeTable();
    Route::spladeUploads();
});
