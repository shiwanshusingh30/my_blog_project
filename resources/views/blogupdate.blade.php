@extends('layout')
@section('tittle','Update Blog')

@section('content')

<h2 class="mb-4 fw-semibold text-center">Edit Blog</h2>

<div class="card shadow-sm p-4 mx-auto" style="max-width: 700px;">

    <form action="{{ route('updateblog',$blogs->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mt-3">
            <label for="title" class="form-label fw-semibold">Title</label>
            <input type="text" 
                   class="form-control @error('title') is-invalid @enderror" 
                   value="{{ $blogs->title }}" 
                   name="title">
            <span class="text-danger">
                @error('title')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <!-- Image section (still commented as before) -->

        <div class="mt-3">
            <label for="author" class="form-label fw-semibold">Author</label>
            <input type="text" 
                   class="form-control @error('author') is-invalid @enderror"
                   value="{{ $blogs->author }}" 
                   name="author">
            <span class="text-danger">
                @error('author')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="mt-3">
            <label for="content" class="form-label fw-semibold">Contents</label>
            <textarea name="contents" 
                      class="form-control @error('contents') is-invalid @enderror" 
                      rows="5"
                      style="line-height: 1.6; padding: 12px;">{{ $blogs->contents }}</textarea>
            <span class="text-danger">
                @error('contents')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <div class="mt-3">
            <label for="category" class="form-label fw-semibold">Category</label>
            <input type="text" 
                   name="category" 
                   value="{{ $blogs->category }}" 
                   class="form-control @error('category') is-invalid @enderror">
            <span class="text-danger">
                @error('category')
                    {{ $message }}
                @enderror
            </span>
        </div>

        <button type="submit" class="btn btn-primary  mt-4 w-100 py-2 fw-semibold">
            Submit
        </button>

    </form>

</div>

@endsection
