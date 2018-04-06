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
                <a href="articles/{{$article->alias}}" class="btn btn-sm btn-success">Характеристики</a>
                <a href="articles/{{$article->alias}}/edit" class="btn btn-sm btn-info">Редактировать</a>
            <form action="articles/{{$article->alias}}" method="post">
                {{csrf_field()}}
                {!! method_field('delete') !!}
                <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
            </form>
        </div>
    @endforeach

@endsection