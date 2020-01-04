<?php
use App\DummyDetails;

Route::get('/', ['as'=>'trangchu','uses'=>'PageController@index']);
Route::get('login', 'LoginController@index')->name('nmn.login');
Route::get('login/done', 'LoginController@login')->name('nmn.logindone');
Route::get('sign', 'SignController@index')->name('nmn.signup');
Route::get('sign/done', 'SignController@create')->name('nmn.insert');

//product's detail
Route::get('product/detail/{id}', 'PageController@detail')->name('detail');

// Cart
Route::get('them-san-pham/{id}','CartController@addProductToCart')->name('get.add.product');
Route::get('gio-hang','CartController@listCartProduct')->name('gio-hang');
Route::get('/checkout', 'CartController@getCheckOut')->name('checkout');
Route::post('/checkout', 'CartController@postCheckOut');
Route::get('gio-hang/remove/{id}', 'CartController@remove')->name('remove');
