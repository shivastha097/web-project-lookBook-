<?php

Route::get('/', function () {
    return view('layouts/admin/index');
});

Route::group(['prefix'=>'admin'], function(){
    Route::get('categories', [
        'uses'  =>  'Admin\CategoryController@index',
        'as'    =>  'admin.categories'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
