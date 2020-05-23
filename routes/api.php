<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::apiResource('/class','Api\ClassController');
Route::apiResource('/subject','Api\SubjectController');
Route::apiResource('/section','Api\SectionController');
Route::apiResource('/student','Api\StudentController');


//for jWT route =   api/auth/login
Route::group([

    // 'middleware' => 'api',
    //'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});