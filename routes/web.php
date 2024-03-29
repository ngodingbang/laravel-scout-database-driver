<?php

use App\Http\Controllers\UserController;
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

Route::redirect('/', '/user/query');

Route::prefix('/user')->name('user.')->controller(UserController::class)->group(function () {
    Route::get('/query', 'indexUsingQuery')->name('index-query');
    Route::get('/scout', 'indexUsingScout')->name('index-scout');
});
