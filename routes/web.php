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

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
Route::get('/journal', [App\Http\Controllers\HomeController::class, 'journal'])->name('journal');
Route::get('/approved_journals_list', [App\Http\Controllers\HomeController::class, 'approvedJournal'])->name('approved.journal');
Route::get('/student_income', [App\Http\Controllers\HomeController::class, 'studentIncome'])->name('student.income');
Route::get('/student_receivable', [App\Http\Controllers\HomeController::class, 'studentReceivable'])->name('student.receivable');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
