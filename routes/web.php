<?php

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

Route::get('/', [\App\Http\Controllers\MeetingController::class, 'index']);

Route::get('/my-profile', [MyProfileController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::resource('meeting', \App\Http\Controllers\MeetingController::class);
Route::resource('meeting.comments', \App\Http\Controllers\CommentController::class);
