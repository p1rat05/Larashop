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
//        $article = new Article;
//        $article->alias = request('alias');
//        $article->model = request('model');
//        $article->price = request('price');
//        $article->chars = request('chars');
//        $article->desc = request('desc');
//        $article->idBrand=1;
//        $article->idArtGroup=1;
//        $article->save();
        $this->validate(request(), [
            'alias' => 'required',
            'model' => 'required',
            'price' => 'required',
            'chars' => 'required',
            'desc' => 'required'
        ]);
        Article::create([
            'alias' => request('alias'),
            'model' => request('model'),
            'price' => request('price'),
            'chars' => request('chars'),
            'desc' => request('desc'),
            'idBrand' => 1,
            'idArtGroup' => 1
        ]);
        return redirect('/');
    }


    public function show(Article $article)
    {
//        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }
}
