<?php
Route::get('/', function (){
    return view('index');
})->middleware('auth');

Route::resource('/api/bathroomTypes', 'BathroomController');
Route::resource('/api/balconyTypes', 'BalconyController');
Route::resource('/api/streets', 'StreetController');
Route::resource('/api/flats', 'FlatController');
Route::resource('/api/sites', 'SiteController');
Route::resource('/api/materials', 'MaterialController');
Route::resource('/api/regions', 'RegionController');
Route::resource('/api/flatTypes', 'FlatTypeController');
Route::resource('/api/flatStates', 'FlatStateController');
Route::resource('/api/houseTypes', 'HouseTypeController');
Route::resource('/api/flatSchemas', 'FlatSchemaController');
Route::resource('/api/houses', 'HouseController');
Route::resource('/api/users', 'UserController');
Route::auth();
Route::post('/logout', 'AuthController@logout');

Route::post('/upload', function () {	
     foreach (Request::file('uploadedFile') as $inputFile) {
     	$inputFile->move('images', $inputFile->getClientOriginalName());     	
    }
    return [1,2,3,4,5];
});

Route::get('/files/{file}', function (Request $request, $file) {
    return file($file);
});