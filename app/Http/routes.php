<?php

Route::get('/', ['uses' => 'IndexController@index', 'as' => 'main_page']);


Route::get('users', ['uses' => 'TestController@userList', 'as' => 'user.list']);
Route::get('hello-user-{name?}', ['uses' => 'TestController@index', 'as' => 'say-hello'])->where('name', '[A-Za-z]{3,15}');


Route::match(['get', 'post'], 'foo', function(){
	return 'here';
});


// Калькулятор
Route::get('digits/{num1}/{op}/{num2}', ['uses' => 'CalculateController@calculate'])
	->where('num1', '\d+')
	->where('num2', '\d+')
	->where('op', '[+\-*/]');
});