@extends('layouts.foundation');

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class ="well">

                <h3><a href="{{url('/posts', $post->post_id)}}"> {{$post->title}} </a></h3>
                <hr>
                <small>Submitted at {{$post->created_at}}</small>
            </div>
        @endforeach
        <!--adding pagination to the view -->
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
