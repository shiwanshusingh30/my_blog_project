@extends('layout')
@section('tittle', 'Create New Blog')

@section('content')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow border-0 p-4">
                    <h3 class="mb-4">Create New Blog</h3>

                    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                value="{{ old('title') }}" name="title">
                            <span class="text-danger">
                                @error('title') {{ $message }} @enderror
                            </span>
                        </div>

                        <div class="mt-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                accept="image/*">
                            <span class="text-danger">
                                @error('image') {{ $message }} @enderror
                            </span>
                        </div>

                        <div class="mt-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" class="form-control @error('author') is-invalid @enderror"
                                value="{{ old('author') }}" name="author">
                            <span class="text-danger">
                                @error('author') {{ $message }} @enderror
                            </span>
                        </div>

                        <div class="mt-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="contents" class="form-control @error('contents') is-invalid @enderror"
                                rows="6">{{ old('contents') }}</textarea>
                            <span class="text-danger">
                                @error('contents')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mt-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" name="category" value="{{ old('category') }}" class="form-control"
                                @error('category') is-invalid @enderror>
                            <span>
                                @error('category')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>


                        <button type="submit" class="btn  btn-primary mt-4 w-100">Submit</button>
                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection