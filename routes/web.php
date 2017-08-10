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
 *route pour le front_end
 */


Route::get('/', 'RestaurantController@index')->name('homepage');

Route::get('front/plats/cart/{id}', 'CartController@cartContent')->name('cart_content')->middleware('auth');

Route::get('front/cart/list', 'CartController@panier')->name('panier');

Route::get('front/cart/store', 'CartController@store')->name('store');

/**
 *route pour le panel
 */

Route::get('admin/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('admin/plats/list_back', 'PlatController@listIndex')->name('list_plats_back')->middleware('auth');

Route::get('admin/plats/list_front/{id}', 'PlatController@index')->name('list_plats_front');

Route::get('admin/plats/create', 'PlatController@create')->name('create_plat')->middleware('auth');

Route::post('admin/plats/store', 'PlatController@store')->name('store_plat')->middleware('auth');

Route::get('admin/plats/store/{id}', 'PlatController@detail')->name('detail_plat')->middleware('auth');

Route::get('admin/commande/list', 'CommandeController@index')->name('list_commande')->middleware('auth');

Route::get('admin/commande/invoice/{id}', 'CommandeController@invoice')->name('invoice')->middleware('auth');




/**
 *route pour leAuth
 */

Auth::routes();

Route::get('/homepage', 'HomeController@index')->name('home');
