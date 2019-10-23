@extends('layout')

@section('title', 'Posts')

@section('content')
  <h1>Posts</h1>
  <div class="mb-5">
    <a href="{{ route('posts.create') }}">Create New Post</a>
  </div>

  @forelse ($posts as $post)
    <h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>
    <h5>Published: {{ $post->isPublished() }}</h5>
    <p>{{ Str::words($post->content, 20) }}</p>
    <hr>
  @empty
    <h3>There are no posts</h3>
  @endforelse
@endsection