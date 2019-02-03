<?php

Route::get('/', function () {
    return view('layouts/admin/index');
});

Route::group(['prefix'=>'admin'], function(){
    Route::get('categories', [
        'uses'  =>  'Admin\CategoryController@index',
        'as'    =>  'admin.categories'
    ]);
    Route::get('categories/create', [
        'uses'  =>  'Admin\CategoryController@create',
        'as'    =>  'admin.get_create_category'
    ]);
    Route::post('categories/create', [
        'uses'  =>  'Admin\CategoryController@store',
        'as'    =>  'admin.post_create_category'
    ]);
    Route::get('categories/edit/{category}', [
        'uses'  =>  'Admin\CategoryController@edit',
        'as'    =>  'admin.get_edit_category'
    ]);
    Route::post('categories/edit/{category}', [
        'uses'  =>  'Admin\CategoryController@update',
        'as'    =>  'admin.post_edit_category'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
