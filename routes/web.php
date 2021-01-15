<?php

use App\Http\Controllers\LanguageController;

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
// Auth::routes();
Auth::routes();

Route::get('/', 'StaterkitController@home')->name('home');
Route::get('home', 'StaterkitController@home')->name('home');
// Route Components
Route::get('layouts/collapsed-menu', 'StaterkitController@collapsed_menu')->name('collapsed-menu');
Route::get('layouts/boxed', 'StaterkitController@layout_boxed')->name('layout-boxed');
Route::get('layouts/without-menu', 'StaterkitController@without_menu')->name('without-menu');
Route::get('layouts/empty', 'StaterkitController@layout_empty')->name('layout-empty');
Route::get('layouts/blank', 'StaterkitController@layout_blank')->name('layout-blank');


// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);
