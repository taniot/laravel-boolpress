@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
       {{ $post->title }}
    </h2>
    @if ($post->image)
        <div>
        <img src="{{ asset('storage/' . $post->image) }}" alt=" {{ $post->title }}">
    </div>
    @endif


    <p>{{ $post->content }}</p>
    <hr>
    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>

</div>
@endsection
