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
Route::prefix('/business-area/')->group(function () {
    Route::get('agriculture', [HomePageController::class, 'agriculture'])->name('businessArea.agriculture');
    Route::get('food', [HomePageController::class, 'food'])->name('businessArea.food');
    Route::get('media', [HomePageController::class, 'media'])->name('businessArea.media');
    Route::get('real-estate', [HomePageController::class, 'realEstate'])->name('businessArea.realEstate');
});
Route::get('/strategic/alliance/{companyName}', [HomePageController::class, 'strategicAlliance'])->name('strategicAlliance');
Route::get('/trainings', [HomePageController::class, 'trainings'])->name('trainings');

Route::post('/contact-submit', [HomePageController::class, 'submit']);
