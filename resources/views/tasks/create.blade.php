
@extends('layouts.app')
@section('content')
 @if($errors->any()s)
     <div class="alert alert-danger">
         @foreach($errors->all() as $error)
            {{$error}}
         @endforeach
     </div>
 @endif
    <form action="{{route('task.store')}}" method="POST">
        @csrf
        <input type="hidden" name="project_id" value="{{$id}}">

        <label  class="col-sm-2 col-form-label">Введите имя проекта</label>
        <input type="text" name="title" class="form-control" id="inputPassword">

        <label  class="col-sm-2 col-form-label">Опишите ваш проект</label>

        <textarea class="form-control" name="deskription" ></textarea>
        <label for="customRange1" class="col-sm-2 col-form-label">Насколько он для вас важен</label>

        <select class="form-select" name="important" aria-label="Default select example">
            <option value="Nit important">Not important</option>
            <option value="very important">Very important</option>
            <option value="important">Important</option>
        </select>
        <button type="submit" class="col-sm-2 btn btn-dark">Сохранить</button>
    </form>
@endsection
