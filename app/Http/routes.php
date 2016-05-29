<?php

// Blog area
Route::group(['prefix' => 'article', 'namespace' => 'Article'], function(){

	Route::get('/', ['uses' => 'ArticleController@index', 'as' => 'article.create']);
	Route::get('/{article}/view', ['uses' => 'ArticleController@view', 'as' => 'article.view']);
	Route::get('/{article}/edit', ['uses' => 'ArticleController@edit', 'as' => 'article.edit']);
	Route::put('/{article}/update', ['uses' => 'ArticleController@update', 'as' => 'article.update']);
	Route::get('create', ['uses' => 'ArticleController@create', 'as' => 'article.create']);
	Route::post('create', ['uses' => 'ArticleController@store', 'as' => 'article.store']);

});



Route::get('/', ['uses' => 'IndexController@index', 'as' => 'main_page']);


Route::get('users', ['uses' => 'TestController@userList', 'as' => 'user.list']);
Route::get('hello-user-{name?}', ['uses' => 'TestController@index', 'as' => 'say-hello'])->where('name', '[A-Za-z]{3,15}');


Route::match(['get', 'post'], 'foo', function(){
	return 'here';
});

Route::get('db/select', 'DBController@select');
Route::get('db/insert', 'DBController@insert');
Route::get('db/update', 'DBController@update');
Route::get('db/delete', 'DBController@delete');
Route::get('db/seed', 'DBController@seedsShow');




Route::get('request/index', ['uses' => 'FormController@index']);
Route::post('request/index', ['uses' => 'FormController@store', 'as' => 'form']);




// Калькулятор
Route::get('digits/{num1}/{op}/{num2}', ['uses' => 'CalculateController@calculate'])
	->where('num1', '\d+')
	->where('num2', '\d+')
	->where('op', '[+\-*/]');

Route::auth();

Route::get('/home', 'HomeController@index');
