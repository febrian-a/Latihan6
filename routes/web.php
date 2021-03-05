<?php

use App\Http\Controllers\Controller;
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

Route::get('/member', function(){
    return view('members.index');
});

Route::resource('members', 'App\Http\Controllers\MembersController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/members', [App\Http\Controllers\MembersController::class, 'index'])->name('members')->middleware('auth');

Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile');
Route::post('/profile/update', 'App\Http\Controllers\ProfileController@updateProfile')->name('profile.update');
