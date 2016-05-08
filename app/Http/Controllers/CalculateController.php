<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CalculateController extends Controller
{
    public function calculate($num1, $op, $num2)
    {
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
    }
}
