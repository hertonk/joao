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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\ParticipantController::class, 'inscricao'])->name('inscricao');

Route::post('/store', [App\Http\Controllers\ParticipantController::class, 'store'])->name('store');

Route::get('/confirmacao', [App\Http\Controllers\ParticipantController::class, 'confirmacao'])->name('confirmacao');

Route::get('/detalhe/{id}', [App\Http\Controllers\HomeController::class, 'detalhe'])->name('detalhe');

Route::get('/aprovar/{id}', [App\Http\Controllers\ParticipantController::class, 'aprovar'])->name('aprovar');

Route::get('/naoaprovar/{id}', [App\Http\Controllers\ParticipantController::class, 'naoaprovar'])->name('naoaprovar');
