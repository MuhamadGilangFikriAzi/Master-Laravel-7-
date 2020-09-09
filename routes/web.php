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

Auth::routes();

Route::middleware('auth:web')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('test', 'HomeController@test')->name('test');

    Route::prefix('settings')->group(function () {

        Route::prefix('user')->group(function () {
            Route::get('index', 'UserController@index')->name('user.index');
            Route::get('create', 'UserController@create')->name('user.create');
            Route::post('store', 'UserController@store')->name('user.store');
            Route::get('{user}/show', 'UserController@show')->name('user.show');
            Route::get('{user}/edit', 'UserController@edit')->name('user.edit');
            Route::put('{user}/update', 'UserController@update')->name('user.update');
            Route::delete('{user}/delete', 'UserController@delete')->name('user.delete');
        });

        Route::prefix('role')->group(function () {
            Route::get('index', 'RoleController@index')->name('role.index');
            Route::get('create', 'RoleController@create')->name('role.create');
            Route::post('create/store', 'RoleController@store')->name('role.store');
            Route::post('hasPermission', 'RoleController@hasPermission')->name('role.hasPermission');
            Route::get('show/{role}', 'RoleController@show')->name('role.show');
            Route::get('delete/{role}', 'RoleController@delete')->name('role.delete');
        });

        Route::prefix('permission')->group(function () {
            Route::get('/', 'PermissionController@index')->name('permission.index');
            Route::post('store', 'PermissionController@store')->name('permission.store');
            Route::delete('{permission}/delete', 'PermissionController@delete')->name('permission.delete');
        });

        Route::prefix('setting')->group(function () {
            Route::get('index', 'SettingController@index')->name('setting.index');
            Route::get('{setting}/edit', 'SettingController@edit')->name('setting.edit');
            Route::put('{setting}/update', 'SettingController@update')->name('setting.update');
        });
    });
});
