@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        Lista dei post
    </h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>
                    <ul>
                        <li><a href="" class="btn btn-sm btn-primary">Show</a></li>
                        <li><a href="" class="btn btn-sm btn-warning">Edit</a></li>
                        <li></li>
                    </ul>


                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
