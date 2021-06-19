@extends('layouts.app')
@section('title')
    <h1>Список ваших проектов</h1>
@endsection
@section('content')
<table class="table table-dark table-hover">
        <thead>
        <tr>

            <th scope="col">Название</th>
            <th scope="col">Описание</th>
            <th scope="col">Действия</th>

        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
        <tr>

            <td>{{$project['title']}}</td>
            <td>{{$project['deskription']}}</td>
            <td><a href="{{route('projects.edit', $project['id'])}}" class="btn btn-warning">Обновить</a>
                <form method="POST" action="{{route('projects.destroy',$project['id'])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn">Удалить</button>
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
</table>
        <span>
            {{$projects->links()}}
        </span>
<style>
    .w-5 {
    .display:none
    }
</style>
    <a href="{{route('projects.create')}}" class="btn btn-warning">Созать новый проект</a>
@endsection
