@extends('layouts.layout')

@section('content')

    <form action="" id="createFrm">
    <div class="form-group">
        <label for="alias">Alias</label>
        <input type="text" name="model">
    </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price">
        </div>
        <div class="form-group">
            <label for="chars">Characteristics</label>
            <input type="text" name="chars">
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <input type="text" name="desc">
        </div>
        <div class="form-group">
            <input type="reset" class="btn btn-danger" id="resetBtn">
            <input type="submit" class="btn btn-primary" value="Добавить">
        </div>
    </form>

@endsection