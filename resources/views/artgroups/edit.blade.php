@extends('layouts.layout')

@section('content')

    <h2>Добавить Группу товаров</h2>
    <form method="">

    </form>
    <div class="col-md-4">
        Наименование
    </div>
        <div class="row">
            <div class="col-md-4">
                {{$artGroup->name}}
            </div>
            <a href="AG/{{$artGroup->id}}/edit" class="btn btn-info btn-sm">Редактировать</a>
        </div>
    <div class="container">
        <a href="AG/create" class="btn btn-success">Добавить</a>
    </div>
@endsection