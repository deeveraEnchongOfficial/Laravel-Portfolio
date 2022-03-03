<?php

use App\Models\Seo;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/profile', function () {
//     return view('profile');
// });
// Route::get('/resume', function () {
//     return view('resume');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::resource('about', 'App\Http\Controllers\AboutController');
Route::resource('skills', 'App\Http\Controllers\SkillsController');
Route::resource('seo', 'App\Http\Controllers\SeoController');
Route::resource('portfolio', 'App\Http\Controllers\PortfolioController');
Route::resource('resume', 'App\Http\Controllers\ResumeController');
Route::resource('profile', 'App\Http\Controllers\ProfileController');
Route::resource('changepass', 'App\Http\Controllers\ChangePassController');
Route::resource('information', 'App\Http\Controllers\InformationController');