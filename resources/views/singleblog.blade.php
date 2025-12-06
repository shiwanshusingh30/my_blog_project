@extends('layout')
@section('tittle', 'Single Blog Detail')

@section('content')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow border-0 p-4">

                    <h2 class="mb-3 mx-auto">{{ $blog->title }}</h2>



                    @if ($blog->image)
                        <div class="mb-3 text-center">
                            <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid rounded shadow-sm border"
                                style="max-height: 300px; object-fit: cover;">
                        </div>
                    @endif
                    <div class="text-muted m-auto">

                        
                        <div class="d-flex gap-4 mb-1">
                            <span><strong>Author:</strong> {{ $blog->author }}</span>
                            <span><strong>Category:</strong> {{ $blog->category }}</span>
                        </div>

                        
                        <div class="d-flex gap-4">
                            <span><strong>Created at:</strong> {{ $blog->created_at->format('Y-m-d') }}</span>
                            <span><strong>Last Update:</strong> {{ $blog->updated_at->format('Y-m-d') }}</span>
                        </div>

                    </div>


                    <div class="mb-4">
                        <h5 class="fw-semibold " >Content:</h5>
                        <p class="text-secondary border" style="line-height: 1.6;">
                            {{ $blog->contents }}
                        </p>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('home') }}" class="btn btn-secondary">Home</a>
                        <a href="{{ route('blog.grid') }}" class="btn btn-info">
                            See All Blogs
                        </a>
                        <a href="{{ route('update', $blog->slug) }}" class="btn btn-primary">Edit</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection