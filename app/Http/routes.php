<?php

Route::get('/',function (){
    return response()->view('index');
});

Route::resource('/api/streets', 'StreetController');
