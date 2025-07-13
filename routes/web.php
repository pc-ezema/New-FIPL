<?php

use App\Http\Controllers\HomePageController;
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

Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/business', [HomePageController::class, 'business'])->name('business');
Route::get('/careers', [HomePageController::class, 'careers'])->name('careers');
Route::get('/contact-us', [HomePageController::class, 'contactUs'])->name('contactUs');
Route::get('/about-us', [HomePageController::class, 'aboutUs'])->name('aboutUs');
Route::get('/about-us/vision', [HomePageController::class, 'vision'])->name('aboutUs.vision');
Route::get('/about-us/mission', [HomePageController::class, 'mission'])->name('aboutUs.mission');
Route::get('/about-us/core-values', [HomePageController::class, 'coreValues'])->name('aboutUs.coreValues');
Route::get('/sustainability', [HomePageController::class, 'sustainability'])->name('sustainability');
Route::get('/strategic/alliance', [HomePageController::class, 'strategicAlliance'])->name('strategicAlliance');
