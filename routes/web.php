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


// Route::get('logout','LoginController@logout')->name('logout');
// hair
Route::get('hair', 'PageController@hair')->name('hair');
//makeup
Route::get('makeup', 'PageController@makeup')->name('makeup');

//b_tools
Route::get('beauty_tool', 'PageController@tool')->name('beauty_tools');

// //skincare
Route::get('skincare', 'PageController@skincare')->name('skincare');

// //b&b
Route::get('bath_body', 'PageController@body')->name('bath_body');

// //ffood
Route::get('functional_food', 'PageController@food')->name('functional_foods');

//product's detail
Route::get('product/detail/{id}', 'PageController@detail')->name('detail');
// Cart
Route::get('them-san-pham/{id}','CartController@addProductToCart')->name('get.add.product');
Route::get('gio-hang','CartController@listCartProduct')->name('gio-hang');
// Route::get('/', ['as'=>'trangchu','uses'=>'PageController@index']);
Route::get('/checkout', 'CartController@getCheckOut')->name('checkout');
Route::post('/checkout', 'CartController@postCheckOut');
Route::get('gio-hang/remove/{id}', 'CartController@remove')->name('remove');

// hiển thị dropdow
Route::get('DG', 'dropdownController@DG')->name('DG');
Route::get('UT', 'dropdownController@UT')->name('UT');
Route::get('NT', 'dropdownController@NT')->name('NT');
Route::get('ST', 'dropdownController@ST')->name('ST');
Route::get('DT', 'dropdownController@DT')->name('DT');
Route::get('BB', 'dropdownController@BB')->name('BB');
Route::get('eyes', 'dropdownController@eyes')->name('eyes');
Route::get('mas', 'dropdownController@mas')->name('mas');
Route::get('EP', 'dropdownController@EP')->name('EP');
Route::get('lips', 'dropdownController@lips')->name('lips');
Route::get('DM', 'dropdownController@DM')->name('DM');
Route::get('blusher', 'dropdownController@blusher')->name('blusher');
Route::get('powder', 'dropdownController@powder')->name('powder');
Route::get('foundation', 'dropdownController@foundation')->name('foundation');
Route::get('CW', 'dropdownController@CW')->name('CW');
Route::get('CG', 'dropdownController@CG')->name('CG');
Route::get('TDC', 'dropdownController@TDC')->name('TDC');
Route::get('toner', 'dropdownController@toner')->name('toner');
Route::get('serum', 'dropdownController@serum')->name('serum');
Route::get('KCN', 'dropdownController@KCN')->name('KCN');


//quanli
Route::get('manage', 'manageProductsController@index')->name('manage');
Route::get('manage/add', 'manageProductsController@add')->name('add');
Route::get('manage/insert', 'manageProductsController@update_insert')->name('manage.insert');
Route::get('manage/edit/{id}', 'manageProductsController@edit')->name('edit');
Route::get('manage/edit/update/{id}', 'manageProductsController@update')->name('update');
Route::get('manage/destroy/{id}', 'manageProductsController@destroy')->name('destroy');




//manager_search
Route::get('manage/search', 'manageProductsController@search')->name('manage.search');
//order_management
Route::get('order', 'manageProductsController@bill')->name('order');
Route::get('bill_detail/{id}', 'manageProductsController@bill_detail')->name('bill_detail');
Route::get('order/bill_destroy/{id}', 'manageProductsController@bill_destroy')->name('bill_destroy');
Route::get('order/search', 'manageProductsController@bill_search')->name('bill_search');
//search
Route::get('search', 'searchController@search')->name('search');
?>