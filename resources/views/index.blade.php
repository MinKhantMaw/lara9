@extends('app')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <a href="{{ route('post.create') }}">Create Post</a>
                    <div class="card-header text-muted">Post List</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $posts)
                                    <tr>
                                        <th scope="row">{{ $posts->id }}</th>
                                        <td>{{ $posts->title }}</td>
                                        <td>{{ $posts->description }}</td>
                                        <td>
                                            <a href="{{ route('post.edit', $posts->id) }}">Edit</a>
                                            {{-- delete post --}}
                                            <form action="{{ route('post.destroy', $posts->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
