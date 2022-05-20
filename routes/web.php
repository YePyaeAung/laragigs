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
Route::delete('/lists/{listing}/delete', [ ListingController::class, 'destroy']);
Route::get('/lists/{listing}', [ ListingController::class, 'show']);

Route::get('/auth/register', [ AuthController::class, 'create' ]);
Route::post('/auth/register', [ AuthController::class, 'store' ]);
Route::get('/auth/login', [ AuthController::class, 'login' ]);
Route::post('/auth/login', [ AuthController::class, 'postLogin' ]);
Route::post('/auth/logout', [ AuthController::class, 'logout' ]);
