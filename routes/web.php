<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $articles = DB::table('articles')->get();
    return view('index', compact('articles'));
});

Route::get('/{id}', function($id)
{
    $article = DB::table('articles')->find($id);
//    dd($articles);
    return view('articles.show', compact('article'));
});