@extends('layout')

@section('title', "Edit Post")

@section('content')
  <h1 class="mb-5">Edit Post</h1>
  <form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
                                          
    @include('posts.partials.form')
      
    <button type="submit" class="btn btn-success">Update Post</button>
  </form>
  <hr>
  <a href="{{ route('posts.show', $post->id) }}">Cancel Editing<a/>
@endsection