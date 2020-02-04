@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href='/posts/create' class='btn btn-primary btn-sm'>Create Post</a>
                    <p></p>
                    <h3>Your Blog Post</h3>
                    @if(count($posts) > 0)
                        <table class='table table-striped'>
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <th><a href="/posts/{{$post->id}}/edit" class='btn btn-default'>Edit</a></th>
                                    <th>
                                        {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'text-right'])!!}
                                           {{Form::hidden('_method', 'DELETE')}}
                                           {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close()!!}
                                    </th>
                                </tr>
                                
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
