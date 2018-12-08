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
    return view('welcome')->with(['name' =>'zoo',
                                'greeting' => '안녕하세요?',]);
});

Route::get('/home', function(){
    return redirect(route('home'));
});

Route::get('/test/{foo?}', function($foo='bar'){
    return '<h1>test routing</h1>'.$foo;
})->where('foo', '[0-9a-zA-Z]{3}');