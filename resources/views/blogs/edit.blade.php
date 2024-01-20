@extends('admin')
@section('content')
<div class="container">
        <h2>Edit Blog</h2>
        <form action="{{ route('blog.update', $blog->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title"><h5>Title</h5></label>
                <input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
            </div>
            <div class="form-group">
                <label for="description"><h5>Description</h5></label>
                <textarea name="description" class="form-control" required>{{ $blog->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image"><h5>Image</h5></label>
                <input type="file" name="image" class="form-control">
            </div><br>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
   