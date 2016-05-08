<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function userList()
    {
    	$names = ['Neo', 'Morpheus', 'Tank', 'Trinity', 'Trinity', 'Trinity'];

    	return view('test/list', compact('names'));

    	// return view('test')->withTitle('Ого тайтл работает')->withName($name);
    }

    public function index($name='o_O')
    {
    	return view('test/profile', compact('name'));
    }
}
