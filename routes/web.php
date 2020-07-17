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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/privacy', 'PrivacyController');
Route::get('/terms', 'TermsOfServiceController');

Route::get('login/github', 'Auth\LoginController@redirectToProvider')->name('oauth.redirect');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback')->name('oauth.callback');
