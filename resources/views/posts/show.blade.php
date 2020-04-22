@extends('layouts.foundation');

@section('content')
    <a href= "{{url('/posts')}}" class="btn btn-default">Go back</a>
            <h1>{{$post->title}}</h1>
            <div>
                {{$post->body}}
            </div>
            <hr>
            <small>Submitted at{{$post->created_at}}</small>
            <hr>
            <!--how to pass tabke field variable to url with admin template-->
            <a href="{{url('/posts/'. $post->post_id. '/edit')}}" class="btn btn-default">Edit</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->post_id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
@endsection
