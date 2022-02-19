<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\MyProfileController;
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

require __DIR__ . '/auth.php';

Route::get('/', [MeetingController::class, 'index']);
Route::get('/my-profile', [MyProfileController::class, 'index'])
    ->middleware('auth')
    ->name('my-profile');

Route::resource('meeting', MeetingController::class);
Route::resource('meeting.comments', CommentController::class);
