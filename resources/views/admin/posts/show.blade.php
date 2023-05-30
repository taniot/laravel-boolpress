@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">
            {{ $post->title }}
        </h1>
        <h3>Category: {{ $post->category?->name ?: 'Nessuna categoria' }}</h3>
        @if ($post->image)
            <div>
                <img src="{{ asset('storage/' . $post->image) }}" alt=" {{ $post->title }}">
            </div>
        @endif


        <p>{{ $post->content }}</p>



        @if ($post->comments->count())
            <hr>
            <div class="comments">
                <h3>Commenti</h3>
                <ul>
                    @foreach ($post->comments as $comment)
                        <li>
                            <div>
                               <h4>{{ $comment->author !== null ? $comment->author : 'Utente Anonimo' }}</h4>
                               <p>{{ $comment->content }}</p>
                               <form action="{{ route('admin.comments.destroy', $comment) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Cancella</button>
                               </form>
                               <hr>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        @endif


        <hr>
        <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>

    </div>
@endsection
