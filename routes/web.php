<?php
use \Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

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
Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/', 'ProductController@index')->name('product.index');


Route::get('/{product}', 'ProductController@show')->name('product.show');

Route::get('/products/cart', 'CartController@index')->name('cart.index');
Route::post('/products/cart', 'CartController@store')->name('cart.store');
Route::delete('/products/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/products/cart/update', 'CartController@update')->name('cart.update');
Route::get('/products/cartEmpty', function (){
    Cart::destroy();
})->name('cart.empty');


Route::get('/add/product', 'HomeController@addItems')->name('add.items')->middleware('admin');

Route::post('/add/category', 'ProductController@store')->name('add.category');

Route::post('/add/product', 'ProductController@create')->name('add.product');