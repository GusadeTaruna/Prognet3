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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');

Route::post('/signup', 'Auth\RegisterController@simpan')->name('signup');

Route::get('/track-order', 'UserController@trackOrder');
Route::get('/checkout', 'UserController@CheckoutPage');
Route::get('/products', 'UserController@showProduct');
Route::get('/product-detail', 'UserController@showDetailsProduct');
Route::get('/cart', 'UserController@showCart');
Route::get('/profile', 'UserController@showProfile');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', 'AdminController@index')->name('admin.home');
Route::get('/list-product', 'AdminController@productList');
Route::get('/add-product', 'AdminController@inputProduct');
Route::get('/category-product', 'AdminController@listCategories');
Route::get('/courier', 'AdminController@listCourier');
Route::post('/inputProduct', 'AdminController@store');
Route::post('/inputCategories', 'AdminController@addCategory');
Route::post('/inputCourier', 'AdminController@addCourier');


Route::group(['prefix'=>'admin'], function(){
	Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
	Route::get('/login/coba', 'AuthAdmin\LoginController@showLoginForm2')->name('admin.login.coba');
	Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
	Route::get('/register', 'AuthAdmin\RegisterController@showRegistrationForm')->name('admin.register');
	Route::post('/register', 'AuthAdmin\RegisterController@register')->name('admin.register.submit');
	Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
});
