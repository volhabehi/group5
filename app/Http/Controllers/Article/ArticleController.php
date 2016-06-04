<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(5);

        return view('article.index', compact('articles'));
    }

    public function view(Article $article)
    {
        return view('article.view', compact('article'));
    }

    public function create()
    {
        return view('article.create');
    }
    
    public function store(ArticleRequest $request)
    {
        $article = \Auth::user()->article()->create($request->all());

        $article->tags()->attach($request->get('tag_list'));

        flash('Успеx', 'Новость ' . array_get($request->all(), 'title') . ' добавлена');
        
        return redirect()->back();
    }
    
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }
    
    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        $article->tags()->sync($request->get('tag_list'));

        flash('Успеx', 'Новость ' . $article->title . ' обновлена');
        
        return redirect()->back();
    }
    
    
}
