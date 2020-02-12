@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Contacts</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td colspan = 2>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}} {{$user->surname}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{$user->id}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{$user->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection