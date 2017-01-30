<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('relasi/{id}','HobiController@relasi');


Route::get('naruto/{id}','HobiController@naruto');
Route::get('create','HobiController@create');
   
Route::post('/awe','HobiController@store');

  

		

