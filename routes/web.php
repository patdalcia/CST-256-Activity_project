<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    $response = "Hello World";
    return $response;
});

    Route::get('/helloworld', function (){
        return view('helloworld');
    });

    Route::get('/test', 'TestController@Test2');
    
    Route::post('/whoami','WhatsMyNameController@index');
    
    Route::get('/askme', function() {
        return view('whoami');
    });
    
        Route::get('/login', function () {
            return view('login');
        });
        
        //Route::post('/dologin', 'LoginController@index');
        Route::post('/dologin', 'LoginController@createCustomerTest');
       
        Route::get('/login2', function(){
            return view('login2');
        });
        
        