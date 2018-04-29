@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <hr>
    <br>
    @if (count($posts) > 0)
        <div class="container">
            <div class="row">
            @foreach ($posts as $post)
                <div class="card col-sm-4">
                  <div class="card-body">
                    <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Author: ---</h6>
                    <p class="card-text">{{$post->body}}.</p>
                    <small>Written on {{$post->created_at}}</small><br>
                    <hr>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
            @endforeach
            </div>
        </div>
        <br>
        <div class="container">
            {{$posts->links()}}
        </div>
    @else
        <p>No posts found</p>
    @endif
@endsection
