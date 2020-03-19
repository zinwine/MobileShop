<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/','PageController@index');
// Route::get('/phone','PageController@phone');
// Route::get('/computer','PageController@computer');
// Route::get('/accessories','PageController@accessories');
// Route::get('/about','PageController@about');
// Route::get('/contact','PageController@contact');
// Route::get('/login','PageController@login');
// Route::get('/detail/{id}','PageController@detail');
// // Route::get('/phone','PageController@show');


// Auth::routes();


// // Route::get('mobile_phone','Admin\BrandController@index');
// // Route::get('accessories','Admin\BrandController@accessoryIndex');
// Route::get('/bmoile','Admin\BrandController@mobileIndex');

// // Route::get('/brand/show/{id}','Admin\BrandController@show');
// Route::get('/phone_brand/show/{id}','Admin\BrandController@phoneShow');
// Route::get('/computer_brand/show/{id}','Admin\BrandController@computerShow');
// Route::get('/accessories_brand/show/{id}','Admin\BrandController@accessoriesShow');

// // Route::get('/single_product/show/{id}','Admin\ProductController@show');

// Route::get('product/add_cart/{id}','Admin\ProductController@add');
// Route::get('/addtocart','Admin\ProductController@cartShow');
// Route::get('cart/trash/{id}','Admin\ProductController@delete');

// Route::get('/home', 'HomeController@index');
// Route::get('/logout','Auth\LoginController@logout');
// Route::group(array('prefix'=>'admin','namespace'=>'admin','middleware'=>'manager'),function () {

//     Route::get('dashboard','AdminController@index');

//     Route::get('add_role','AdminController@create');
//     Route::post('add_role','AdminController@store');
//     Route::get('role/delete/{id}','AdminController@destroy');   

//     Route::get('users','AdminController@userIndex');
//     Route::get('user/edit/{id}','AdminController@userEdit');
//     Route::post('user/edit/{id}','AdminController@userUpdate');  

//     Route::get('category','CategoryController@adminIndex');
//     Route::post('add_category','CategoryController@store');
//     Route::get('category/show/{id}','CategoryController@show');    
//     Route::get('category/{id}/edit','CategoryController@edit');
//     Route::post('category/update/{id}','CategoryController@update');
//     Route::get('/category/delete','CategoryController@destroy'); 

//     Route::get('brands','BrandController@adminIndex');
//     Route::get('add_brand','BrandController@create');
//     Route::post('add_brand','BrandController@store');
//     Route::get('brand/edit/{id}','BrandController@edit');
//     Route::post('update/brand/{id}','BrandController@update');
//     Route::get('brand/{id}/delete','BrandController@destroy'); 

//     Route::get('product','ProductController@adminIndex');
//     Route::post('add_product','ProductController@store');
//     Route::get('product/edit/{id}','ProductController@edit');
//     Route::post('product/edit/{id}','ProductController@update');
//     Route::get('product/delete/{id}','ProductController@destroy'); 
//     Route::get('product/detail/{id}','ProductController@adminShow'); 

//     Route::get('types','TypeController@index');
//     Route::post('add_type','TypeController@store');
//     Route::get('type/edit/{id}','TypeController@edit');
//     Route::post('type/update/{id}','TypeController@update');
//     Route::get('type/delete/{id}','TypeController@destroy');

// });

Route::get('/{any}', function () {
    return view('post');
  })->where('any', '.*');
