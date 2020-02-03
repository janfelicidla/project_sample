@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>
    <a href="/user">Go Back</a>
    {!! Form::open(['action'=>['UsersController@update', $users->id],'method'=>'POST']) !!}
        @include('users._form')
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection