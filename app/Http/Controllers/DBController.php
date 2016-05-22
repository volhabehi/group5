<?php

namespace App\Http\Controllers;

use DB;
use App\Test;
use App\Http\Requests;
use Illuminate\Http\Request;

class DBController extends Controller
{
    public function select()
    {
    	// $city = DB::table('City')->whereBetween('Population', [200000, 300000])->paginate(5);
    	// $city = DB::table('City')->whereIn('ID', [1, 5, 334, 234, 2311, 123, 1])->paginate(5);
    	// $city = DB::table('City')->whereNotIn('ID', [1, 5, 334, 234, 2311, 123, 1])->paginate(5);
    	/*$city = DB::table('City')
    		->join('Country', 'City.CountryCode', '=', 'Country.Code')
    		->select('City.Name', 'City.Population', 'City.District', 'Country.Name as n')
    		->paginate(5);*/
    	// $city = DB::table('City')->whereRaw('ID > 3000')->paginate(5);
    	// $city = DB::table('City')->max('population');
    	// $city = DB::table('City')->average('population');
    	// $city = DB::table('City')->sum('population');
		$city = Test::sum('salary');


    	dd($city);

    	return view('db', ['cities' => $city]);
    }

    public function insert()
    {

    	$r = DB::table('tests')->insert([
    		['salary' => 12,'updated_at' => new \DateTime(),'created_at' => new \DateTime()],
    		['salary' => 123,'updated_at' => new \DateTime(),'created_at' => new \DateTime()],
    		['salary' => 1244,'updated_at' => new \DateTime(),'created_at' => new \DateTime()],
    		['salary' => 12555,'updated_at' => new \DateTime(),'created_at' => new \DateTime()],
    		['salary' => 126666,'updated_at' => new \DateTime(),'created_at' => new \DateTime()],
    	]);

    	dd($r);
    }

    public function update()
    {

    	/*$r = DB::table('tests')->where('id', 26)->update([
    		'salary' => 100000000
    	]);*/
		$r = DB::table('tests')->where('id', 26)->decrement('salary', 500, ['updated_at' => new \DateTime()]);

    	dd($r);
    }

    public function delete()
    {

    	$r = DB::table('tests')
    	->whereIn('id', [23, 24, 25])
    	->delete();
    }

    public function seedsShow()
    {
    	$images = DB::table('images')->paginate();

    	return view('seeds', compact('images'));
    }
}
