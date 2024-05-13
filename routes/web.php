<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontendController;


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
Route::get('/', [FrontendController::class, 'index']);
Route::get('movie-details/{id}', [FrontendController::class, 'show'])->name('movie.details');
Route::get('tvshow-details/{id}', [FrontendController::class, 'tvshow'])->name('tvshow.details');
Route::get('movie-download/{id}', [FrontendController::class, 'moviedownload'])->name('movie.download');
Route::get('tvshow-download/{id}', [FrontendController::class, 'tvshowdownload'])->name('tvshow.download');
Route::get('/search', [FrontendController::class, 'search'])->name('search');
Route::get('/movie', [FrontendController::class, 'movie']);
Route::get('/tvshow', [FrontendController::class, 'shows']);


