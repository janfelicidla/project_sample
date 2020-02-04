@extends('layouts.app')

@section('content')
    <h1>Users</h1>
    @if(count($users) > 0)
        <table class="table">
            <thead>
                <th>Username</th>
                <th>First_Name</th>
                <th>Last_name</th>
                <th>Address</th>
                <th>Action</th>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->username}}</td>
                <td>{{$user->firs_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->address}}</td>
                <td><a href="user/{{$user->id}}/edit" class="btn btn-info">Edit</a> | {!! Form::open(['action'=>['UsersController@destroy', $user->id], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close()!!}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        @else
            <p>No user available.</p>
    @endif
    <a href="user/create" class="btn btn-primary">Add User</a>
@endsection