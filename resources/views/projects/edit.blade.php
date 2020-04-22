@extends('layouts.foundation');

@section('content')
    <h1>Edit project</h1>
    <!--specify the action that the form will use,$post->post_id wa use so the updates knows which post id is updating-->
    {!! Form::open(['action'=> ['ProjectsController@update', $project->project_id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('project_name', 'Project Name')}}
            <!--form control is a bootstrap class and the form::text will give the input-->
            {{Form::text('project_name', $project->project_name, ['class' => 'form-control', 'placeholder' => 'Project Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('project_description', 'Description')}}
                {{Form::textarea('project_description', $project->project_description, ['class' => 'form-control', 'placeholder' => 'Description->'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
