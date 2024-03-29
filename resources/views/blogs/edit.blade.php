@extends('admin')

@section('content')
<div class="container">
    <h2>Edit Blog</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title"><h5>Title</h5></label>
            <input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
        </div>
        <div class="form-group">
            <label for="description"><h5>Description</h5></label>
            <textarea name="description" id="description" class="form-control" required>{{ $blog->description }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="image"><h5>Image</h5></label>
            <input type="file" name="image" class="form-control">
        </div><br>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<!-- Initialize CKEditor on the 'description' textarea -->
<script>
    CKEDITOR.replace('description');
</script>
@endsection
