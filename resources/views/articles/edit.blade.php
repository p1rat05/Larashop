@extends('layouts.layout')

@section('content')

    <h2>Редактировать</h2>
    <form action="/articles/{{$article->alias}}" method="post">
        {{csrf_field()}}
        {!! method_field('patch') !!}
    <div class="form-group">
        <label for="alias">Алиас</label>
        <input class="form-control" type="text" name="alias" value="{{$article->alias}}">
    </div>
        <div class="form-group">
            {{csrf_field()}}
            <label for="model">Model</label>
            <input class="form-control" type="text" name="model" value="{{$article->model}}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control" type="text" name="price" value="{{$article->price}}">
        </div>
        <div class="form-group">
            <label for="chars">Characteristics</label>
            <input class="form-control" type="text" name="chars" value="{{$article->chars}}">
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <textarea class="form-control" type="text" rows="10" name="desc">{{$article->desc}}</textarea>
        </div>
        <div class="form-group">
            <input type="reset" class="btn btn-danger" id="resetBtn">
            <input type="submit" class="btn btn-primary" value="Сохранить">
        </div>
        @include('layouts.errors')
    </form>

@endsection