@extends('layouts.app')
@section('title')
    <h1>Список ваших проектов</h1>
@endsection
@section('content')
<table class="table table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
        <tr>
            <th scope="row">{{$project['id']}}</th>
            <td>{{$project['title']}}</td>
            <td>{{$project['deskription']}}</td>
            <td>{{$project['prepare']}}</td>
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
    <a href="#" class="btn btn-warning">Созать новый проект</a>
@endsection
