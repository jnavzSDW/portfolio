<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
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

Route::get('/', [UserController::class, 'home']);

Route::get('/login', [UserController::class, 'index']);
Route::post('/login/authenticate', [UserController::class, 'authenticate']);
Route::get('/logout', [UserController::class, 'destroy']);
Route::post('/editAbout', [UserController::class, 'editAboutMe']);
Route::post('/updateSkills', [UserController::class, 'updateSkills']);
Route::post('/updateEduc', [UserController::class, 'updateEduc']);
Route::post('/updateExperience', [UserController::class, 'updateExperience']);

Route::post('/addWork', [WorkController::class, 'create']);