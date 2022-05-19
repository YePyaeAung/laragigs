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
Route::get('/lists/create', [ ListingController::class, 'create']);
Route::post('/lists/store', [ ListingController::class, 'store']);
Route::get('/lists/{listing}/edit', [ ListingController::class, 'edit']);
Route::put('/lists/{listing}/update', [ ListingController::class, 'update']);

Route::get('/lists/{listing}', [ ListingController::class, 'show']);

Route::get('/login', [ AuthController::class, 'login' ]);