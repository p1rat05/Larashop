@extends('layouts.layout')

@section('content')

    <h2>Добавить товар</h2>
    <form action="/articles" method="post">
    <div class="form-group">
        <label for="alias">Alias</label>
        <input class="form-control" type="text" name="alias">
    </div>
        <div class="form-group">
            {{csrf_field()}}
            <label for="model">Model</label>
            <input class="form-control" type="text" name="model">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control" type="text" name="price">
        </div>
        <div class="form-group">
            <label for="chars">Characteristics</label>
            <input class="form-control" type="text" name="chars">
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <textarea class="form-control" type="text" rows="10" name="desc"></textarea>
        </div>
        <div class="form-group">
            <input type="reset" class="btn btn-danger" id="resetBtn">
            <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
        @include('layouts.errors')
    </form>

@endsection