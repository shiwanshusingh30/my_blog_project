@extends('layout')
@section('tittle','Home Page')


@section('content')

<div class="container mt-4">

<div class="row">

    <nav class="navbar navbar-expand navbar-dark bg-dark mb-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold " href="#">My Blog</a>
        </div>
    </nav>

</div>


<div class="row">

   
    <div class="col-md-8">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-semibold mb-0">All Posts</h3>
            <a href="{{ route('blog.create') }}" class="btn btn-primary">+ Add New</a>
        </div>

        <div class="card shadow border-0">
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>
                                    @if ($blog->image)
                                        <img src="{{ asset('storage/' . $blog->image) }}"
                                            style="width:80px; height:60px; " class="rounded">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>

                                <td class="fw-semibold">{{ $blog->title }}</td>

                                <td class="text-muted">{{ $blog->created_at->format('Y-m-d') }}</td>

                                <td>
                                    <a href="{{ route('blog.single', $blog->slug) }}"
                                       class="btn btn-sm btn-outline-primary">View</a>
                                </td>

                                <td>
                                    <a href="{{ route('delete', $blog->slug) }}"
                                       class="btn btn-sm btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            
            </div>
            
        </div>
              <div class="mt-4 mx-auto d-flex justify-content-center">
                {{ $blogs->links() }}
            </div>
    </div> 
    


  
    <div class="col-md-4">

        <h4 class="fw-semibold mb-3">Latest Posts</h4>

        <div class="list-group">

            @foreach ($latest as $post)
                <div class="list-group-item border-0 shadow-sm rounded mb-3">

                    <h5 class="mb-1 fw-bold">
                        <a href="{{ route('blog.single', $post->slug) }}"
                           class="text-decoration-none">
                            {{ $post->title }}
                        </a>
                    </h5>

                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}"
                             style="width:100%; height:150px;  class="rounded mb-2" >
                    @endif

                    <small class="text-muted d-block">
                        Created: {{ $post->created_at->format('M d, Y') }}
                    </small>
                    <small class="text-muted">
                        Updated: {{ $post->updated_at->format('M d, Y') }}
                    </small>

                </div>
            @endforeach

        </div>

        
        <div class="mt-4">
            <a href="{{ route('blog.grid') }}" class="btn btn-info w-100">
                See All Blogs
            </a>
            </div

    </div>

</div>
</div>

@endsection
