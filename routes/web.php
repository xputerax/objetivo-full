<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\CommentVoteController;
use App\Http\Controllers\GoalBoardController;
use App\Http\Controllers\GoalCommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenteeController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\ActionPlanController;
use App\Http\Controllers\ActivityController;

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
    return redirect(route('home'));
    // return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');

    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::post('/profile/change_pw', ChangePasswordController::class)->name('profile.change_pw');

    Route::get('/goal-board', [GoalBoardController::class, 'index'])->name('goal-board.index');

    Route::post('/submit-goal', [GoalController::class, 'store'])->name('submit-goal.store');

    Route::put('/goal-card/{id}', [GoalController::class, 'update'])->name('goal-card.update');

    Route::delete('/delete-goal-card/{goal}', [GoalController::class, 'destroy'])->name('delete-goal-card.destroy');

    Route::get('/goal', [GoalController::class, 'index'])->name('goal.index');

    Route::get('/goal/{id}', [GoalController::class, 'show'])->name('goal.show');

    Route::post('/goal/{id}', [GoalController::class, 'show'])->name('goal.show');

    Route::post('/submit-action-plan', [ActionPlanController::class, 'store'])->name('submit-action-plan.store');

    Route::put('/action-plan/{actionPlanID}', [ActionPlanController::class, 'update'])->name('action-plan.update');

    Route::delete('/delete-action-plan/{actionPlan}', [ActionPlanController::class, 'destroy'])->name('delete-action-plan.destroy');

    Route::post('/submit-activity', [ActivityController::class, 'store'])->name('submit-activity.store');

    Route::put('/mark-activity/{activityID}', [ActivityController::class, 'update'])->name('mark-activity.update');

    Route::delete('/delete-activity/{activity}', [ActivityController::class, 'destroy'])->name('delete-activity.destroy');

    Route::get('/mentors', [MentorController::class, 'index'])->name('mentors.index');

    Route::get('/mentees', [MenteeController::class, 'index'])->name('mentees.index');

    Route::get('/search', [MenteeController::class, 'search'])->name('mentees.search');

    Route::post('/submit-comment', [GoalCommentController::class, 'store'])->name('submit-comment.store');

    Route::delete('/delete-comment/{goalComment}', [GoalCommentController::class, 'destroy'])->name('delete-comment.destroy');

    Route::put('/vote-comment/{commentVoteID}', [CommentVoteController::class, 'update'])->name('vote-comment.update');

    Route::post('/submit-mentor', [GoalController::class,'updateGoalMentor'])->name('submit-mentor.updateGoalMentor');
});
