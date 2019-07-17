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


Route::get('/', 'FrontController@index')->name('shopHome');

Route::get('/products','FrontController@products')->name('products');
// Route::get('/product/details','FrontController@productDetails')->name('product.details');
Route::get('/cheekout','FrontController@cheekOut')->name('cheekout');
Route::get('/cart','FrontController@cart')->name('cart');

Route::get('/user/login','FrontController@login')->name('user.login');

Route::post('/user/register','UserRegisterController@userRegistration')->name('user.register');
Route::post('/user/post','UserRegisterController@userLogin')->name('user.post');
Route::get('/logout','UserRegisterController@logOut')->name('logout');

// View Producrs
Route::get('/product/details/{id}','FrontController@productDetails')->name('viewProduct');

Route::get('/product/category/{id}','FrontController@productsByCategory')->name('viewCategoryProduct');
Route::get('/product/brand/{id}','FrontController@productsByBrand')->name('viewBrandProduct');

/******wish List *****/
Route::get('/add/wish/{id}','FrontController@addWishList')->name('add.wish');
Route::get('/show/wishlist','FrontController@showWishList')->name('show.wishlist');
Route::get('delete/wishlist/{id}','FrontController@deleteWishList')->name('delete.wishlist');

/****** add cart  *****/
Route::get('/cart/add/{id}','CartController@addCart')->name('add.cart');
Route::get('/cart/increment/{id}/{qty}','CartController@increment')->name('cart.increment');
Route::get('/cart/decrement/{id}/{qty}','CartController@decrement')->name('cart.decrement');
Route::get('/cart/delete/{id}','CartController@deleteCart')->name('delete.cart');
// Route::post('/order-confirm', 'FrontController@orderConfirm')->name('complete');


/***** contact / message  ****/
Route::get('contact/us','FrontController@contact')->name('contact');
Route::post('contact/store','FrontController@contactStore')->name('contact.store');


/***** Search  ****/

Route::post('search','FrontController@search')->name('search');

/*** user profile ***/
Route::get('user/profile','FrontController@createProfile')->name('user.profile');
Route::post('user/register/update/{id}','FrontController@userRegistrationUpdate')->name('user_regiter.update');


Auth::routes();

/******* order ******/

Route::prefix('admin')->middleware('auth')->group(function(){

Route::get('create/order','OrderController@orderList')->name('order');
Route::get('details/order/{id}','OrderController@detailsOrder')->name('details.order');
Route::get('pending/{id}','OrderController@pendingOrder')->name('pending');
Route::get('delivery/list','OrderController@deliveryList')->name('delivery.list');
Route::get('delivery/details/order/{id}','OrderController@deliveryDetailsOrder')->name('delivery.details.order');
Route::get('delete/order/{id}','OrderController@delete')->name('delete');
Route::post('order/store','FrontController@orderStore')->name('order.store');

/*** message contact ***/
Route::get('message','ContactController@message')->name('message');
Route::get('message/view/{id}','ContactController@viewMessage')->name('message.view');
Route::get('message/delete/{id}','ContactController@deleteMessage')->name('delete.message');
/****End message  ***///

Route::get('home', 'HomeController@index')->name('home');
Route::get('category', 'AdminController@categoryList')->name('category');
Route::post('addCategory', 'AdminController@categoryAdd')->name('addCategory');
Route::get('categoryDelete/{id}', 'AdminController@categoryDelete')->name('categoryDelete');

Route::get('brand', 'AdminController@brandList')->name('brand');
Route::post('addBrand', 'AdminController@brandAdd')->name('addBrand');
Route::get('brandDelete/{id}', 'AdminController@brandDelete')->name('brandDelete');

Route::get('product', 'AdminController@productList')->name('product');
Route::get('addProduct', 'AdminController@productAdd')->name('addProduct');
Route::post('storeProduct', 'AdminController@productStore')->name('storeProduct');
Route::get('productView/{id}', 'AdminController@productView')->name('productView');
Route::get('productEdit/{id}', 'AdminController@productEdit')->name('productEdit');
Route::get('productDelete/{id}', 'AdminController@productDelete')->name('productDelete');
Route::post('updateProduct/{id}', 'AdminController@productUpdate')->name('updateProduct');
Route::get('user/list','UserRegisterController@userList')->name('user');
Route::get('user/details/{id}','UserRegisterController@detailsUser')->name('user.details');
});
