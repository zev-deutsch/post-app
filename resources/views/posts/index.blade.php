@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="card bg-light m-3">
                    <h3 class="card-body"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}}</small>
                </div>

            @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@stop
