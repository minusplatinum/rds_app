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

/**
 * Navigation Routes
 */
Route::get('/', 'PagesController@index')->name('index');

Route::get('services', 'PagesController@services')->name('services');

Route::get('templates', 'PagesController@templates')->name('templates');

Route::get('contact', 'PagesController@contact')->name('contact');

Route::post('contact', 'PagesController@contactForm')->name('contactForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
