<?php

Route::group([
    'middleware' => ['admin.api'],
    'namespace' => 'Admin',
    'prefix' => 'admin/api'
], function () {
    Route::get('/index/me', 'IndexController@me')->name('admin.index.me');
    Route::post('/index/logout', 'IndexController@logout')->name('admin.index.me');
});
