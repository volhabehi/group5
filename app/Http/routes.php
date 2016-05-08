<?php

Route::get('/', function(){
	return 'Hello world';
});

Route::get('hello-user-{name?}', function($name='o_o'){
	return 'hello ' . $name;
})->where('name', '[A-Za-z]{3,5}');


Route::match(['get', 'post'], 'foo', function(){
	return 'here';
});


// Калькулятор
Route::get('digits/{num1}/{op}/{num2}', function($num1, $op, $num2){

	$operators = [
		'+' => function($a, $b){
			return $a + $b;
		},

		'-' => function($a, $b){
			return $a - $b;
		},

		'*' => function($a, $b){
			return $a * $b;
		},

		'/' => function($a, $b){
			if($b == 0){
				return "Деление на 0 запрещено";
			}

			return $a / $b;
		},
	];

	return $operators[$op]($num1, $num2);

})
->where('num1', '\d+')
->where('num2', '\d+')
->where('op', '[+\-*/]');