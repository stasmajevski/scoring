@extends('base')

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
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}} {{$user->surname}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{ucfirst($user->education->name)}}</td>
                        <td>{{$user->terms}}</td>
                        <td class="info">
                            {{$user->scoring}}
                            <i class="material-icons info_outline" data-toggle="tooltip" data-html="true" data-placement="right" title="Education: {{$user->education->scoring}} <br/> Terms: {{$user->calculateTerms()}}">
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
