@extends('base')
@section('button')
<a href="" class="btn btn-success" data-toggle="modal" data-target="#create"><i
        class="material-icons">add_circle</i><span>Add User</span></a>
@endsection
@include('users.create')
@section('main')
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Education</th>
                    <th>Terms</th>
                    <th>Scoring</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}} {{$user->surname}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->education->name}}</td>
                    <td><input type="checkbox" @if($user->terms) checked @endif disabled></td>
                    <td class="info">
                        {{$user->scoring}}
                        <i class="material-icons info_outline" data-toggle="tooltip" data-html="true"
                            data-placement="right" title="
                                Phone: {{$user->phoneScoring}}</br>
                                Email: {{$user->emailScoring}}</br>
                                Education: {{$user->education->scoring}}</br>
                                Terms: {{$user->termsScoring}}
                               ">
                            &#xe88f;
                        </i>
                    </td>
                    <td>
                        <a href="{{$user->id}}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>
@endsection
