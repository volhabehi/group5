<?php

namespace App\Http\Controllers;

use DB;
use Debugbar;
use Illuminate\Http\Request;
use App\Http\Requests;

class IndexController extends Controller
{
    public function index()
    {
    	$t = DB::table('tests')->where('id', '>', 3)->orWhere('salary', '<', 1234)->get();

    	Debugbar::info($t);
    	return view('index.index');
    }
}
