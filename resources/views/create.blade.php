@extends('app')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Create Post</div>
                    <div class="card-body">
                        <form action="{{ route('post.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" cols="10" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-1">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
