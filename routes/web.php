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


//ADMIN ROUTES

//Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
  //All the admin routes will be defined here...
//});

Route::get('admin', 'AdminController@dashboard');
Route::get('admin/login', 'AdminController@login')->name('login');
Route::get('admin/profile', 'AdminController@profile')->name('profile');
//Route::get('admin/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('admin/editprofile', 'AdminController@editprofile')->name('editprofile');

//site optins
Route::get('admin/orders', 'AdminController@orders')->name('orders');
Route::get('admin/add-brand', 'AdminController@addbrand')->name('addbrand');
Route::get('admin/add-product', 'AdminController@addproduct')->name('addproduct');
Route::get('admin/add-category', 'AdminController@addcategory')->name('addcategory');

Route::get('admin/manage-brand', 'AdminController@manbrand')->name('manbrand');
Route::get('admin/manage-product', 'AdminController@manpro')->name('manpro');
Route::get('admin/manage-category', 'AdminController@mancat')->name('mancat');

Route::get('admin/edit-product/{id}', 'AdminController@editpro');//->name('editpro');
Route::get('admin/edit-category/{id}', 'AdminController@editcat');//->name('editcat');

//POST Methods/Form submit (Add, Edit, Update,Delete(GET))
Route::post('admin/login', 'AdminController@adminLogin')->name('admin/login');
Route::post('admin/logout', 'AdminController@adminLogout')->name('admin/logout');


Route::post('/save-brand', 'AdminController@savebrand')->name('savebrand');
Route::post('admin/save-category', 'AdminController@savecat');
Route::post('admin/save-product', 'AdminController@saveproduct')->name('saveproduct');

Route::post('admin/upcat/{id}', 'AdminController@upcat')->name('upcat');
Route::post('admin/uppro/{id}', 'AdminController@uppro')->name('uppro');

Route::get('/delbrand/{id}', 'AdminController@delbrand')->name('delbrand');
Route::get('/delcat/{id}', 'AdminController@delcat');
Route::post('/delcats', 'AdminController@delcats');//->name('delcat');
Route::get('/delpro/{id}', 'AdminController@delpro');//->name('delpro');
Route::get('/productStatus/{id}/{status}', 'AdminController@productStatus');////->name('changeStatus');
Route::get('/ship-order/{id}', 'AdminController@ship_order');
Route::get('/cancel-order/{id}', 'AdminController@cancel_order');



//MAIN

Route::get('/', 'PagesController@home'); 
Route::get('forgot/{remail}', 'testController@forgot')->name('forgot');
Route::post('send_reset_email', 'testController@send_reset_email')->name('send_reset_email');
Route::post('reset/{remail}', 'testController@reset')->name('reset');


Route::get('{/anypath}', 'PagesController@home')->where('path', '.*');
//Route::get('admin/{anypath}', 'AdminController@dashboard')->where('path', '.*');

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
