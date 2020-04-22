@extends('layouts.foundation');

@section('content')
    <h1>Write message</h1>
    <!--specify the action that the form will use -->
    {!! Form::open(['action'=> 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            <!--form control is a bootstrap class and the form::text will give the input-->
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('title', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Write here->'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
