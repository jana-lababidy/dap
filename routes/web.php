<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => ['userauth']], function () {
    Route::get('/','LoginController@login')->name('login');
    Route::get('/login','LoginController@login')->name('login');
    Route::post('/auth','LoginController@auth')->name('auth');
    Route::get('/register','RegisterController@register')->name('register');
    Route::post('/user-reg','RegisterController@user_reg')->name('user-reg');
    });
    Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => ['usernotauth']], function () {
 
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('/logout', 'LoginController@logout')->name('logout');
        Route::get('/account-setting', 'DashboardController@accountSetting')->name('account-setting');
        Route::post('/update-profile','UserController@update_profile')->name('update-profile');
        Route::post('/update-password', 'UserController@updatePassword')->name('update-password');
        Route::post('/store-project','ProjectController@store')->name('store-project');

    });
