<?php

use Illuminate\Support\Facades\Route;
use Modules\Todo\app\Http\Controllers\TodoController;

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

Route::group(['prefix' => env('PREFIX_ADMIN', 'admin'), 'as' => 'admin.'], function () {
    Route::resource('todo', TodoController::class)->names('todo');
	Route::get('todo/{todo}/detail', [TodoController::class, 'detail'])->name('todo.detail')->middleware('signed');
	Route::get('todo/{todo}/{action}/action', [TodoController::class, 'action'])->name('todo.action')->middleware('signed');
});