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

 Route::namespace('Site')->group(function () {
    Route::get('/','HomeController')->name('Site.home');

    Route::get('parceiros', 'CategoryController@index')->name('Site.partners');
    Route::get('parceiros/{slug}', 'CategoryController@show')->name('Site.partners.category');

    Route::get('blog', 'BlogController')->name('Site.blog');

    Route::view('sobre', 'Site.about.index')->name('Site.about');

    Route::get('contato', 'ContactController@index')->name('Site.contact');
    Route::post('contato', 'ContactController@form')->name('Site.contact.form');
});