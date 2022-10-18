<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QoutationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', function () {
        return view('profile.profile');
    })->name('profile');
    Route::post('/create', [QoutationController::class, 'create'])->name('create');
});
require __DIR__ . '/auth.php';

/**
 *
 * Front End Routes
 *
 */
Route::get('/', function () {
    return view('form');
})->name('home');;
Route::get('/Privacy', function () {
    return view('Privacy');
})->name('privacy');
Route::post('/post', [App\Http\Controllers\LeadController::class, 'data'])->name('post');
//Route::post('/form', 'LeadController@contactForm')->name('contact_form');
Route::post('/form', [App\Http\Controllers\LeadController::class, 'contactForm'])->name('contact_form');
