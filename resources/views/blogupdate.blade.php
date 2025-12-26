<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
    
                <div class="card shadow-sm border-0" style="background:#e8f0ff; border-radius:12px;">
                    <div class="card-body p-4">
    
                        <h3 class="text-center mb-4 fw-bold">Edit Blog</h3>
    
                        <form action="{{ route('updateblog', $blogs->slug) }}" method="POST" enctype="multipart/form-data">
                            @csrf
    
                            {{-- Title --}}
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Title</label>
                                <input type="text" name="title" value="{{ $blogs->title }}"
                                    class="form-control bg-light border-primary @error('title') is-invalid @enderror">
                                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
    
                           
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Author</label>
                                <input type="text" name="author" value="{{ $blogs->author }}"
                                    class="form-control bg-light border-primary @error('author') is-invalid @enderror">
                                @error('author') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
    
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Content</label>
                                <textarea name="contents" rows="6"
                                    class="form-control bg-light border-primary @error('contents') is-invalid @enderror">{{ $blogs->contents }}</textarea>
                                @error('contents') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
    
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Category</label>
                                
                                <select name="category"
                                 class="form-control bg-light border-primary>
                                    <option value="">Select Category</option>
                                    <option value="Technology" {{ old('category', $blogs->category) == 'Technology' ? 'selected' : '' }}>Technology
                                    </option>
                                    <option value="Travel" {{ old('category', $blogs->category) == 'Travel' ? 'selected' : '' }}>Travel</option>
                                    <option value="Lifestyle" {{ old('category', $blogs->category) == 'Lifestyle' ? 'selected' : '' }}>Lifestyle</option>
                                    <option value="Education" {{ old('category', $blogs->category) == 'Education' ? 'selected' : '' }}>Education</option>
                                    <option value="Kids" {{ old('category', $blogs->category) == 'Kids' ? 'selected' : '' }}>Kids</option>
                                    <option value="Health" {{ old('category', $blogs->category) == 'Health' ? 'selected' : '' }}>Health</option>
                                    <option value="Biography" {{ old('category', $blogs->category) == 'Biography' ? 'selected' : '' }}>Biography</option>
                                </select>

                                @error('category') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
    
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold" style="transition: 0.2s;"
                                onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                                Update Blog
                            </button>
                        </form>
    
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</body>
</html>