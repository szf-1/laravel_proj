<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TanggungJawabUserController;
use App\Http\Controllers\TanggungJawabController;




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
    return view('welcome');
});


Auth::routes(['register'=> false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('pekerjaans', PekerjaanController::class);
    Route::resource('tanggungjawabusers', TanggungJawabUserController::class);
    Route::resource('tanggungjawabs', TanggungJawabController::class);
        
    Route::group(['middleware' => ['role:Admin']], function () {
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('laporans', [LaporanController::class, 'index'])->name('laporans.index');
    });

    Route::get('profile', [UserController::class, 'profile'])->name('users.profile');
    Route::post('profile', [UserController::class, 'profileUpdate'])->name('users.profileUpdate');
    
    
    
});

