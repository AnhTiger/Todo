<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\app\Http\Controllers\AdminController;

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
	Route::get('login', [AdminController::class, 'login'])->name('login');
	Route::get('logout', [AdminController::class, 'logout'])->name('logout');
	Route::get('', [AdminController::class, 'index'])->middleware('auth.admin')->name('index');
	Route::get('settings/general', [AdminController::class, 'settingGeneral'])->middleware('auth.admin')->name('settings_general');
	Route::get('profile-setting', [AdminController::class, 'userProfileSetting'])->middleware('auth.admin')->name('user_profile_setting');
	Route::get('change-password', [AdminController::class, 'userChangePassword'])->middleware('auth.admin')->name('user_change_password');
	Route::any('markNotification', 'AdminController@markNotification')->middleware('auth.admin')->name('markNotification');
	Route::post('darkMode', 'AdminController@darkMode')->middleware('auth.admin')->name('darkMode');
});
