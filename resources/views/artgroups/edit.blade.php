@extends('layouts.layout')

@section('content')

    <h2>Редактировать группу товаров</h2>
    <form action="/ArtGroups/{{$artGroup->id}}" method="post">
        {!! method_field('patch') !!}
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="{{$artGroup->name}}">
            {{csrf_field()}}
        </div>
        <div class="form-group">
            <input type="reset" class="btn btn-danger" id="resetBtn">
            <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
        @include('layouts.errors')
    </form>

@endsection