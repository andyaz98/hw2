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

Route::get('home','HomeController@home');


Route::get('getHomeContent','HomeController@getHomeContent');


Route::get('getImages/{query}','HomeController@getImages');


Route::get('getFlightsToken','HomeController@getFlightsToken');


Route::get('login','AuthController@login');


Route::post('login','AuthController@checkLogin');


Route::get('logout','AuthController@logout');


Route::get('getUsers','AuthController@getUsers');


Route::get('signup','AuthController@signup');


Route::post('signup','AuthController@registerUser');


Route::get('home/account','UserSectionController@account');


Route::get('home/account/favourites','UserSectionController@favourites');


Route::get('home/account/search','UserSectionController@search');


Route::get('home/account/search/searchForFlights/{departure}/{arrival}/{direct}','UserSectionController@searchForFlights');


Route::get('home/account/addToFavourites/{fav_dest}','UserFavouritesController@addToFavourites');


Route::get('home/account/getUserFavourites','UserFavouritesController@getUserFavourites');


Route::get('home/account/removeFromFavourites/{fav_dest}','UserFavouritesController@removeFromFavourites');
