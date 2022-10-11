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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('about-us')->get('/about-us' , 'HomeController@about_us');
Route::name('software')->get('/software' , 'HomeController@software');
Route::name('mobile')->get('/mobile' , 'HomeController@mobile');
Route::name('hardware')->get('/hardware' , 'HomeController@hardware');
Route::name('infrastructure')->get('/infrastructure' , 'HomeController@infrastructure');
Route::name('contact-us')->get('/contact-us' , 'HomeController@contact_us');
Route::name('contact')->get('/contact' , 'ContactController@callBack');




Auth::routes();
Route::resource('website','WebsiteController');
Route::get('/backend', 'HomeController@login')->name('login_page');
Route::post('/login', 'Auth\LoginController@login')->name('login_');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/layout', 'HomeController@layout')->name('layout');

Route::group(['middleware' => 'ProtectRoutes'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('home_page');
    Route::get('/users', 'WebsiteController@users')->name('users');
    Route::get('/register', 'HomeController@register')->name('register');
    Route::post('/register', 'WebsiteController@reg_user')->name('register_post');
    Route::get('/form', 'HomeController@form')->name('form');
    Route::post('/form', 'WebsiteController@store')->name('form_store');
    Route::get('/table', 'WebsiteController@index')->name('table');
    Route::get('/edit/{id}', 'WebsiteController@edit')->name('edit');
    Route::post('/update', 'WebsiteController@update')->name('update');
    Route::get('/edit_header', 'WebsiteController@header')->name('edit_header');
    Route::get('/edit_slider', 'WebsiteController@slider')->name('edit_slider');
});
