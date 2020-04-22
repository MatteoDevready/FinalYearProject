@extends('layouts.foundation');

@section('content')
    <a href= "{{url('/projects')}}" class="btn btn-default">Go back</a>
            <h1>{{$project->project_name}}</h1>
            <div>
                {{$project->project_description}}
            </div>
            <hr>
            <small>Submitted at{{$project->created_at}}</small>
            <hr>
            <!--how to pass tabke field variable to url with admin template-->
            <a href="{{url('/projects/'. $project->project_id. '/edit')}}" class="btn btn-default">Edit</a>
            {!!Form::open(['action' => ['ProjectsController@destroy', $project->project_id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
@endsection
