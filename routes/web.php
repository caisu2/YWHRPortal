<?php

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


Auth::routes();

Route::get('/', 'LandingController@landingPage')->name('landing.page');
Route::post('/logout', 'Auth\LoginController@logout')->name('user.logout');
Route::get('dashboard', 'HomeController@index')->name('home');
Route::middleware(['auth:web', 'user'])->group(function () {
    Route::get('/user/show/pdf', 'UserController@showCV')->name('user.show.pdf');
    Route::get('/user/show/audio', 'UserController@showAudio')->name('user.show.audio');
});

Route::middleware(['auth:web', 'admin'])->group(function () {
    Route::get('/admin/user/profile/{id}', 'AdminController@showProfile')->name('admin.user.profile');
    Route::get('/admin/hire/applicant/{id}', 'AdminController@hireApplicant')->name('admin.hire.applicant');
    Route::get('/admin/position','AdminController@showAvailablePositions')->name('available.position');
    Route::post('/admin/position', 'AdminController@saveAvialablePosition')->name('available.position.post');
    Route::get('/admin/update/position/{id}', 'AdminController@updateAvailablePosition')->name('update.available.position');
    Route::get('/admin/show/pdf', 'AdminController@showCV')->name('admin.show.pdf');
    Route::get('/admin/show/audio', 'AdminController@showAudio')->name('admin.show.audio');
});
