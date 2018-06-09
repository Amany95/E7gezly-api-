<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

// Doctor Route
Route::prefix('doctor')->group(function () {
    Route::get('/all',"DoctorController@index" );
    Route::get('/{doctor}',"DoctorController@show" );
    Route::get('/{doctor}',"DoctorController@indexofhistory" );

});

// Patient Route
Route::prefix('patient')->group(function () {
    Route::post('/rate',"PatientController@store_rate" );
    Route::post('/book',"PatientController@store_book" );
    Route::post('/update',"PatientController@update" );
    Route::get('/{patient}',"PatientController@indexofhistory" );

    

});

