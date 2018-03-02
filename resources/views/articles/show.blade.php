@extends('layouts.layout')

@section('content')


    <div class="col-md-4">
        {{$article->idBrand}}
    </div>
    <div class="col-md-4">
        {{$article->model}}
    </div>
    <div class="col-md-4">
        {{$article->price}}
    </div>
    <div class="col-md-4">
        {{$article->desc}}
    </div>

@endsection