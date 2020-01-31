@extends('layouts.app')

@section('content')
    <h1>Add User</h1>
    <a href="/user">Go Back</a>
    {!! Form::open(['action'=>'UsersController@store','method'=>'POST']) !!}
        <div class='form-group col-lg-4'>
            {{form::label('username','Username')}}
            {{form::text('username', '', ['class'=>'form-control', 'placeholder' => 'Username'])}}
        </div>
        <div class='form-group col-lg-4'>
            {{form::label('password','Password')}}
            {{form::text('password', '', ['class'=>'form-control', 'placeholder' => 'Password'])}}
        </div>
        <div class='form-group col-lg-4'>
            {{form::label('firs_name','First_Name')}}
            {{form::text('firs_name', '', ['class'=>'form-control', 'placeholder' => 'Firs_Name'])}}
        </div><div class='form-group col-lg-4'>
            {{form::label('last_name','Last_Name')}}
            {{form::text('last_name', '', ['class'=>'form-control', 'placeholder' => 'Last_name'])}}
        </div><div class='form-group col-lg-4'>
            {{form::label('address','Address')}}
            {{form::text('address', '', ['class'=>'form-control', 'placeholder' => 'Address'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection