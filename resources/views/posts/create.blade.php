@extends('layout')

@section('title', 'Create New Post')

@section('content')
  <h1 class="mb-5">Create New Post</h1>
  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
                                          
    @include('posts.partials.form')
      
    <button type="submit" class="btn btn-success">Create Post</button>
  </form>
@endsection