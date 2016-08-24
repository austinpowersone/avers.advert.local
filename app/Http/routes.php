<?php

Route::get('/',function (){
    return view('index');
});

Route::resource('/api/streets', 'StreetController');
Route::resource('/api/flats', 'FlatController');
Route::resource('/api/materials', 'MaterialController');
Route::resource('/api/regions', 'RegionController');
Route::resource('/api/flatTypes', 'FlatTypeController');
Route::resource('/api/flatSchemas', 'FlatSchemaController');
Route::resource('/api/houses', 'HouseController');