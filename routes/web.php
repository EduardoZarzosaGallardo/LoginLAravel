<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => 'Dashboard'],function () {
    // PROFILE
    // Route::get('profile','ProfileController@show')->name('dashboard.profile.show');
    Route::get('profile/edit','ProfileController@edit')->name('dashboard.profile.edit');
    Route::get('profile/editpassword','ProfileController@editPassword')->name('dashboard.profile.editPassword');
    Route::post('profile/updatepassword','ProfileController@updatePassword')->name('dashboard.profile.updatePassword');
    // Route::get('profile/{user}/edit','ProfileController@edit')->name('dashboard.profile.edit');
    Route::patch('profile/{user}','ProfileController@update')->name('dashboard.profile.update');

    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'],function () {
        // PRODUCTS
        Route::get('products','ProductsController@index')->name('dashboard.admin.products.index');
        Route::get('products/create','ProductsController@create')->name('dashboard.admin.products.create');
        Route::post('products/store','ProductsController@store')->name('dashboard.admin.products.store');

        Route::get('orders','OrdersController@index')->name('dashboard.admin.orders.index');
        Route::get('users','UsersController@index')->name('dashboard.admin.users.index');

    });

});

Route::get('/home', 'HomeController@index')->name('home');
