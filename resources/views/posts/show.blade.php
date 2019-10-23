@extends('layout')

@section('title', $post->title)

@section('content')
    <h3 class="mt-3">{{ $post->title }}</h3>
    <h5>Published: {{ $post->isPublished() }}</h5>
    <p>{{ $post->content }}</p>
    <hr>
    <a href="{{ route('posts.index') }}">< Back</a> | 
    <a href="{{ route('posts.edit', $post->id) }}">Edit Post</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="mt-2">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger btn-sm">Delete Post</button>
    </form>
@endsection