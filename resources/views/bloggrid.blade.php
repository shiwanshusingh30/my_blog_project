@extends('layout')
@section('title', 'All Blogs')

@section('content')

<div class="container mt-4">

    <div class="d-flex align-items-center gap-3 mb-4">
    <h2 class="fw-bold m-0">All Blog Posts</h2>

    <a href="{{ route('blog.create') }}" class="btn btn-primary ms-auto">
        Create New Blog
    </a>

    <a href="{{ route('home') }}" class="btn btn-secondary">
        Home
    </a>
</div>

    <div class="row">

        @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">

                <div class="card border-0 shadow-sm h-100">

                    @if ($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}"
                             class="rounded"
                             style="height:200px; width: 250px; object-fit:cover;">
                    @endif

                    <div class="card-body">

                        <h5 class="fw-bold">{{ $blog->title }}</h5>

                        <p class="text-muted mb-1">
                            {{ $blog->created_at->format('M d, Y') }}
                        </p>

                        <p class="text-secondary">
                            {{ Str::limit($blog->contents, 120) }}
                        </p>

                        <a href="{{ route('blog.single', $blog->slug) }}"
                           class="btn btn-primary">
                            Read More
                        </a>

                    </div>

                </div>

            </div>
        @endforeach

    </div>

    <div class="mt-4 mx-auto d-flex justify-content-center">
        {{ $blogs->links() }}
    </div>

</div>

@endsection
