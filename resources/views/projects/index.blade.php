@extends('layouts.foundation');

@section('content')
    <h1>Projects View</h1>
    @if(count($projects) > 0)
        @foreach ($projects as $project)
            <div class ="well">
                <h3><a href="{{url('/projects', $project->project_id)}}"> {{$project->project_name}} </a></h3>
                <hr>
                <small>Submitted at {{$project->created_at}}</small>
            </div>
        @endforeach
        <!--adding pagination to the view -->
        {{$projects->links()}}
    @else
        <p>No projects found</p>
    @endif
@endsection
