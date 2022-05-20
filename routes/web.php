<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListingController;
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

Route::get('/', [ ListingController::class, 'index']);
Route::get('/lists/create', [ ListingController::class, 'create'])->middleware('auth');
Route::post('/lists/store', [ ListingController::class, 'store'])->middleware('auth');
Route::get('/lists/manage', [ ListingController::class, 'manage'])->middleware('auth');
Route::get('/lists/{listing}/edit', [ ListingController::class, 'edit'])->middleware('auth');
Route::put('/lists/{listing}/update', [ ListingController::class, 'update'])->middleware('auth');
Route::delete('/lists/{listing}/delete', [ ListingController::class, 'destroy'])->middleware('auth');
Route::get('/lists/{listing}', [ ListingController::class, 'show']);

Route::get('/auth/register', [ AuthController::class, 'create' ])->middleware('guest');
Route::post('/auth/register', [ AuthController::class, 'store' ])->middleware('guest');
Route::get('/auth/login', [ AuthController::class, 'login' ])->name('login')->middleware('guest');
Route::post('/auth/login', [ AuthController::class, 'postLogin' ]);
Route::post('/auth/logout', [ AuthController::class, 'logout' ])->middleware('auth');
