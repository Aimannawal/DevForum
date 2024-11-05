<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route dashboard user
Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware('auth')->name('user.dashboard');

Route::get('/chat-ai', function () {
    return view('user.DevAi');
})->middleware('auth')->name('user.DevAi');

Route::get('/React', function () {
    return view('user.aos');
})->name('user.detail');

Route::get('/detail_forum', function () {
    return view('user.detail_forum');
})->name('user.detail_forum');

Route::get('/forum', [QuestionController::class, 'index'])->name('questions.index');
Route::get('/ask', [QuestionController::class, 'create'])->middleware('auth')->name('questions.create');
Route::post('/questions', [QuestionController::class, 'store'])->middleware('auth')->name('questions.store');
Route::get('/questions/{id}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
Route::put('/questions/{id}', [QuestionController::class, 'update'])->name('questions.update');
Route::delete('/questions/{id}', [QuestionController::class, 'destroy'])->name('questions.destroy');

Route::get('/forum/{id}', [AnswerController::class, 'index'])->name('forum.index');
Route::post('/questions/{question}/answers', [AnswerController::class, 'store'])->name('answers.store');
Route::delete('/answers/{id}', [AnswerController::class, 'destroy'])->name('answers.destroy');
Route::get('/answers/{id}/edit', [AnswerController::class, 'edit'])->name('answers.edit');
Route::put('/answers/{id}', [AnswerController::class, 'update'])->name('answers.update');


// Route dashboard admin
Route::get('/dashboard/admin', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');
