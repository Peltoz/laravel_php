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

Route::get('/', ['as' => 'home', function () {
    // return view('welcome');
  return '제 이름은 "home" 입니다.';  
}]);

Route::get('/home', function(){
    return redirect(route('home'));
});

Route::get('/test/{foo?}', function($foo='bar'){
    return '<h1>test routing</h1>'.$foo;
})->where('foo', '[0-9a-zA-Z]{3}');