
@extends('layouts.app')
@section('content')

    <form action="{{route('projects.update', $project)}}" method="POST">
        @method('PUT')
        @csrf

        <label  class="col-sm-2 col-form-label">Введите имя проекта</label>
        <input type="text" value="{{$project['title']}}" name="title" class="form-control" >

        <label  class="col-sm-2 col-form-label">Опишите ваш проект</label>

        <input class="form-control" value="{{$project['description']}}" name="deskription" >
        <label for="customRange1" class="col-sm-2 col-form-label">Насколько он для вас важен</label>

        <select class="form-select" name="important" aria-label="Default select example">
            <option value="Nit important">Not important</option>
            <option value="very important">Very important</option>
            <option value="important">Important</option>
        </select>
        <button type="submit" class="col-sm-2 btn btn-dark">Сохранить</button>
    </form>

@endsection
