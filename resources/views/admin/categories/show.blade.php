@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ $category->name }}
        </h2>


        <ul>
        @foreach ($category->posts as $post)
            <li><a href="{{ route('admin.posts.edit', $post) }}">{{ $post->title }}</a></li>
        @endforeach
        </ul>
        <hr>
        <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-warning">Edit</a>

    </div>
@endsection
