@extends('layouts.master')
@section('content')
    <h1>List Breeds</h1>
    <h2><a href="/cats/create">Create Breed</a></h2>
    <table style="width:100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach($breeds as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td><a href="/breeds/{{$item->id}}/cats">{{$item->name}}</a></td>
            </tr>
        @endforeach
    </table>
@endsection