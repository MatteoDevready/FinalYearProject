@extends('layouts.foundation');

@section('content')
    <h1>Edit message</h1>
    <!--specify the action that the form will use,$post->post_id wa use so the updates knows which post id is updating-->
    {!! Form::open(['action'=> ['PostsController@update', $post->post_id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            <!--form control is a bootstrap class and the form::text will give the input-->
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Write here->'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
