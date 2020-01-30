<?php

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

Route::get('lang/{language}', ['as' => 'lang.switch', 'uses' => 'Apps\LanguageController@switchLang']);
Route::get('dashboard','Apps\DashboardController@index')->name('dashboard.index');
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
