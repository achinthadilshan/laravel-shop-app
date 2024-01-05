<?php

use App\Http\Controllers\ListingController;
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

Route::view('/', 'welcome');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::group([
    'middleware' => 'auth',
    'prefix' => 'dashboard',
    'as' => 'dashboard.'
], function () {
    Route::view('/', 'dashboard')->name('index');
    Route::get('listings', [ListingController::class, 'index'])->name('listing');
});

require __DIR__ . '/auth.php';
