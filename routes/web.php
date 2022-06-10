<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenteeController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoalCardController;
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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::post('/profile/change_pw', ChangePasswordController::class)->name('profile.change_pw');

    Route::get('/goal-board', [GoalController::class, 'index'])->name('goal-board.index');

    Route::get('/mentors', [MentorController::class, 'index'])->name('mentors.index');

    Route::get('/mentees', [MenteeController::class, 'index'])->name('mentees.index');

    Route::get('/goal-card', [GoalCardController::class, 'index'])->name('goal-card.index');
});
