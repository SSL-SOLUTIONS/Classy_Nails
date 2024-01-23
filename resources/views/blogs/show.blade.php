

@extends('admin')

@section('content')
    <div class="container">
        <h2>Blog Details</h2>
        <div>
            <h1>{{ $blog->title }}</h1>
            <p>{!! Purifier::clean($blog->description) !!}</p>
            <img src="{{ asset('admin/images/blogs/' . $blog->image) }}" alt="Blog Image" style="max-width: 100%; height: auto;">
        </div>
        <div class="mt-3">
            <a href="{{ route('blog.index') }}" class="btn btn-secondary">Back to Blogs</a>
        </div>
    </div>
@endsection
