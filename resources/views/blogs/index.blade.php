
@extends('admin')
@section('content')
<div class="container">
        <h2>Blogs</h2>
        <a href="{{ route('blog.create') }}" class="btn btn-success">Create Blog</a>
        @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->description }}</td>
                        <td>
                        <img src="{{ asset('admin/images/blogs/' . $blog->image) }}" alt="Blog Image" style="max-width: 100px; max-height: 100px;">
                    </td>
                    <td>
                        <td>
                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

 @endsection

