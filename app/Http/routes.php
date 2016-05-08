<?php

Route::get('/', function(){
	return 'Hello world';
});

Route::get('hello-user-{name?}', ['uses' => 'TestController@index', 'as' => 'say-hello'])->where('name', '[A-Za-z]{3,5}');


Route::match(['get', 'post'], 'foo', function(){
	return 'here';
});


// Калькулятор
Route::get('digits/{num1}/{op}/{num2}', ['uses' => 'CalculateController@calculate'])
	->where('num1', '\d+')
	->where('num2', '\d+')
	->where('op', '[+\-*/]');