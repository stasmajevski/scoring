@extends('base')
@section('button')
    <a href="/" class="btn btn-success"><i class="material-icons">arrow_back</i><span>Go back</span></a>
@endsection
@section('main')
    <div id="edit-form">
        <h2>User ID: {{ $getUser->id }} | Scoring: {{ $getUser->scoring}}</h2>
        <form id="form" method="POST" action="{{ action('UserController@update', $getUser->id) }}">
            @method('put')
            @csrf
            @include('users._form')
        </form>
    </div>
@endsection
