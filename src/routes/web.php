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

Route::get('/', function () {
	return view('welcome');
});

// Route::get('/', [App\Http\Controllers\RequestController::class, 'index'])->name('request');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/requests', [App\Http\Controllers\RequestController::class, 'index'])->name('requests');
	Route::get('/leave_reasons', [App\Http\Controllers\LeaveReasonController::class, 'index'])->name('leaveReason');		
	Route::resource('/skin_types', App\Http\Controllers\SkinTypeController::class, ['only' => ['index', 'store']]);
});
