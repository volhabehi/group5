<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index');
    }

    public function create()
    {
        return view('article.create');
    }
    
    public function store(ArticleRequest $request)
    {
        $request = $request->all();
        $request['user_id'] = 1;


        Article::create($request);

        session()->flash('noty', [
            'message' => 'Новость ' . array_get($request, 'title') . ' добавлена',
            'title' => 'Успех',
            'type' => 'success'
        ]);
        
        return redirect()->back();
    }
}
