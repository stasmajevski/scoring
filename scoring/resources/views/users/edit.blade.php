@extends('base')
@section('button')
    <a href="/" class="btn btn-success"><i class="material-icons">arrow_back</i><span>Go back</span></a>
@endsection
@section('main')
    <form method="POST" action="{{ action('UserController@update', $getUser->id) }}">
        @method('put')
        @csrf
        @include('users._form')
    </form>
@endsection
