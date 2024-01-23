@extends('admin')
@section('content')
<div class="container">
    <h2>Create Blog</h2>
    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group col-6">
            <label for="title"><h5>Title</h5></label>
            <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6">
            <label for="description"><h5>Description</h5></label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description') }}</textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-6">
            <label for="image"><h5>Image</h5></label>
            <input type="file" name="image" class="form-control">
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>

        <button type="submit" class="btn btn-success">Save Blog</button><br>
    </form>
</div>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<!-- Initialize CKEditor on the 'description' textarea -->
<script>
    CKEDITOR.replace('description');
</script>
@endsection




