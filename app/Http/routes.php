<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/textgen', 'TextGenController@getIndex');
    Route::get('/usergen', 'UserGenController@getIndex');
    Route::post('/textgen', 'TextGenController@postIndex');
    Route::post('/usergen', 'UserGenController@postIndex');
});
