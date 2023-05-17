@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifica post: {{ $post->title }}</h2>
    @include('partials.errors')
    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" id="content" name="content">{{ old('content', $post->content) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>

</div>
@endsection
