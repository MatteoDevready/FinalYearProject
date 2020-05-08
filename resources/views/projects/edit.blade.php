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
    <div class="form-group">
        <iframe src="https://kingston.app.box.com/embed/s/0kws9ln9pl7dgxnzbnjaup97gc93iuxs?sortColumn=date&view=icon&showItemFeedActions=false&showParentPath=false" width="800" height="550" frameborder="0" allowfullscreen webkitallowfullscreen msallowfullscreen></iframe>
    </div>
    <div class="form-group">
    <iframe src="https://outlook.office365.com/owa/calendar/56882a8189e447a0b9aa45b7c03772e1@kingston.ac.uk/5522679601af4eaa926e153a944c362116265537781715627134/calendar.html" width="800" height="550" frameborder="0" allowfullscreen webkitallowfullscreen msallowfullscreen></iframe>
    </div>
@endsection
