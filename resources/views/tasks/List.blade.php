@extends('layouts.app')
@section('title')
    <h1>Список задач</h1>
@endsection
@section('content')

    <style>
        a {
            display: block;
        }
    </style>
    <table class="table table-dark table-hover">
            @php
            $project =$id;

            @endphp
        <thead>
        <tr>

            <th scope="col">Название</th>
            <th scope="col">Описание</th>
            <th scope="col">Действия</th>

        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>

                <td><a href="{{route('task.show', $task['id'])}}">{{$task['title']}}</a></td>
                <td><a href="{{route('task.show', $task['id'])}}">{{$task['deskription']}}</a></td>
                <td><a href="{{route('task.edit', $task['id'])}}" class="btn btn-warning">Обновить</a>
                    <form method="POST" action="{{route('task.destroy',$task['id'])}}">
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
            {{$tasks->links()}}
        </span>
    <style>
        .w-5 {
        .display:none
        }
    </style>
    <a href="{{route('task.create', ['project'=>$project])}}" class="btn btn-warning">Созать новый проект</a>
@endsection
