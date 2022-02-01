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

Route::get('/', [\App\Http\Controllers\AuthenticController::class, 'index'])->name('authentic.home');
Route::get('/login', [\App\Http\Controllers\AuthenticController::class, 'login'])->name('authentic.login');


Route::middleware(\App\Http\Middleware\Authentication::class)->prefix('/app')->group(function()
{
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('app.home');
});
