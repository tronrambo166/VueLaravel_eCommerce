<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\testController;

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

Route::get('/', 'testController@login');
Route::get('forgot/{remail}', 'testController@forgot')->name('forgot');
Route::post('send_reset_email', 'testController@send_reset_email')->name('send_reset_email');
Route::post('reset/{remail}', 'testController@reset')->name('reset');


//Route::get('{anypath}', 'testController@home')->where('path', '.*');

Auth::routes();


Route::get('home', 'PagesController@home')->name('home');
Route::get('products', 'PagesController@products')->name('products');
Route::get('brands', 'PagesController@brands')->name('brands');
Route::get('cart', 'PagesController@cart')->name('cart');
Route::get('savelist', 'PagesController@savelist')->name('savelist');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('details/{id}', 'PagesController@details');
Route::get('test', 'PagesController@test')->name('test');

Route::post('add-cart/{id}', 'PagesController@add_to_cart')->name('add-cart');
Route::post('add-list/{id}', 'PagesController@add_to_list')->name('add-list');
Route::get('payments/{amount}/{products}/{quantity}/{iq}', 'PagesController@payments');
Route::get('onpayments/{amount}/{products}/{quantity}/{iq}', 'PagesController@onpayments');
Route::get('offpayments/{amount}/{products}/{quantity}/{iq}', 'PagesController@offpayments');
Route::post('orders/{amount}/{quantity}', 'PagesController@orders');

Route::get('profile/{id}', 'PagesController@profile');



//Delete Update
Route::get('delete_list/{id}', 'PagesController@delete_list');
Route::get('delete_cart/{id}', 'PagesController@delete_cart');
Route::post('up_quantity/{id}', 'PagesController@up_quantity');

Route::post('profile/edit/{id}', 'PagesController@updateProfile');
