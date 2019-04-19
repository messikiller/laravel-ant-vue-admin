<?php

Route::group([
    'middleware' => ['admin.api'],
    'namespace' => 'Admin',
    'prefix' => 'admin/api'
], function () {
    Route::get('/index/me', 'IndexController@me')->name('admin.index.me');
    Route::post('/index/logout', 'IndexController@logout')->name('admin.index.me');

    Route::get('/user/list', 'UserController@list')->name('admin.user.list');
    Route::post('/user/add', 'UserController@add')->name('admin.user.add');
    Route::post('/user/reset/password', 'UserController@resetPassword')->name('admin.user.resetPassword');
});
