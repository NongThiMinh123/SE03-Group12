<?php
use App\DummyDetails;

Route::get('/', ['as'=>'trangchu','uses'=>'PageController@index']);
Route::get('login', 'LoginController@index')->name('nmn.login');
Route::get('login/done', 'LoginController@login')->name('nmn.logindone');
Route::get('sign', 'SignController@index')->name('nmn.signup');
Route::get('sign/done', 'SignController@create')->name('nmn.insert');
Route::get('logout','LoginController@logout')->name('logout');
//product's detail
Route::get('product/detail/{id}', 'PageController@detail')->name('detail');
