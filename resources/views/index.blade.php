@extends('layouts.layout')

@section('content')

    <h2>Товары</h2>
    <div class="row">
        <div class="col-md-4">
            <b>Brand</b>
        </div>
        <div class="col-md-4">
            <b>Model</b>
        </div>
        <div class="col-md-4">
            <b>Price</b>
        </div>
    </div>
    @foreach($articles as $article)
        <div class="row">
            <div class="col-md-4">
                {{$article->idBrand}}
            </div>
            <div class="col-md-4">
                {{$article->model}}
            </div>
            <div class="col-md-4">
                {{$article->price}}
            </div>
                <a href="articles/{{$article->id}}" class="btn btn-success">Характеристики</a>
                <a href="#{{$article->id}}" class="btn btn-dark">Купить</a>
        </div>
    @endforeach

@endsection