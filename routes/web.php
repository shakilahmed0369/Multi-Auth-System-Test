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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Front end routes
 */
Route::get('/', function () {
    return view('frontend.home');
});

/**
 * Backend routes
 */
Route::group( ['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard')->middleware(['can:isAdmin' or 'can:isSuperAdmin']);

    //role route
    Route::resource('/role', 'RoleController', ['as' => 'admin'])->middleware('can:isSuperAdmin');
    //Register Admin route
    Route::resource('/register-admin', 'RegisterAdminController', ['as' => 'admin'])->middleware('can:isSuperAdmin' or 'can:isAdmin');
    
});