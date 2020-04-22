@extends('layouts.foundation');

@section('content')
    <h1>Create Project</h1>
    <!--specify the action that the form will use -->
    {!! Form::open(['action'=> 'ProjectsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('project_name', 'Project Name')}}
            <!--form control is a bootstrap class and the form::text will give the input-->
            {{Form::text('project_name', '', ['class' => 'form-control', 'placeholder' => 'Project Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('project_description', 'Description')}}
                {{Form::textarea('project_description', '', ['class' => 'form-control', 'placeholder' => 'Description->'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
