@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
       {{ $post->title }}
    </h2>

    <div>
        <img src="{{ asset('storage/' . $post->image) }}" alt=" {{ $post->title }}">
    </div>

    <p>{{ $post->content }}</p>

</div>
@endsection
