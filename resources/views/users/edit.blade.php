@extends('layouts.app')

@section('content')
    <h1>Add User</h1>
    <a href="/user" class='btn btn-primary'>Go Back</a>
    <p></p>
    <div class='container'>
        {!! Form::open(['action'=> ['UsersController@update', $user->id],'method'=>'POST']) !!}
        <div class='form-group col-lg-4'>
            {{form::label('username','Username')}}
            {{form::text('username', $user->username, ['class'=>'form-control', 'placeholder' => 'Username'])}}
        </div>
        <div class='form-group col-lg-4'>
            {{form::label('password','Password')}}
            {{form::password('password', $user->password ['class'=>'form-control', 'placeholder' => 'Password'])}}
        </div>
        <div class='form-group col-lg-4'>
            {{form::label('firs_name','First_Name')}}
            {{form::text('firs_name', $user->firs_name, ['class'=>'form-control', 'placeholder' => 'Firs_Name'])}}
        </div><div class='form-group col-lg-4'>
            {{form::label('last_name','Last_Name')}}
            {{form::text('last_name', $user->last_name, ['class'=>'form-control', 'placeholder' => 'Last_name'])}}
        </div><div class='form-group col-lg-4'>
            {{form::label('address','Address')}}
            {{form::text('address', $user->address, ['class'=>'form-control', 'placeholder' => 'Address'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
    
@endsection