@extends('layouts.layout')

@section('content')

    <h2>Группы товаров</h2>
    <div class="col-md-4">
        Наименование
    </div>
@foreach($artGroups as $artGroup)
    <div class="row">
    <div class="col-md-4">
        {{$artGroup->name}}
    </div>
    <a href="AG/{{$artGroup->id}}/edit" class="btn btn-info btn-sm">Редактировать</a>
    <form action="AG/{{$artGroup->id}}" method="post">
        {{csrf_field()}}
        {!! method_field('delete') !!}
        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
    </form>
    </div>
@endforeach
    <div class="container">
        <a href="AG/create" class="btn btn-success">Добавить</a>
    </div>
@endsection