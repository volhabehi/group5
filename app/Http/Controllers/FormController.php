<?php

namespace App\Http\Controllers;

use App\Image;
use App\Http\Requests\ImageRequest;

use App\Http\Requests;

class FormController extends Controller
{
    public function index()
    {
        $images = Image::all();
        
        return view('form.index', compact('images'));
    }

    public function store(ImageRequest $request)
    {
        // Image::insert(\Request::all());
        // Image::create(\Request::all());

        Image::insert($request->all());

        return redirect()->back();
    }
}
