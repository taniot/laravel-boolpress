@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crea post</h2>

    @include('partials.errors')

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection
