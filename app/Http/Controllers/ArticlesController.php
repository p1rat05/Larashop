<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        //dd(request()->all);
        $article = new Article();
        $article->alias = request('alias');
        $article->model = request('model');
        $article->price = request('price');
        $article->chars = request('chars');
        $article->desc = request('desc');
        $article->save();
        return redirect('/');
    }


    public function show(Article $article)
    {
//        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }
}
