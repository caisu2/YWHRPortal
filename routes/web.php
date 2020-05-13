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

Route::get('/', function () {
    return view('landing_page');
})->name('landing.page');

Auth::routes();

Route::post('/logout', 'Auth\LoginController@logout')->name('user.logout');
Route::get('dashboard', 'HomeController@index')->name('home');
Route::middleware(['auth:web', 'web'])->group(function () {

});

Route::middleware(['auth:web', 'admin'])->group(function () {
    Route::get('/admin/user/profile/{id}', 'AdminController@showProfile')->name('admin.user.profile');
    Route::get('/admin/hire/applicant/{id}', 'AdminController@hireApplicant')->name('admin.hire.applicant');

});
