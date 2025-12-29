<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6fb;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #444;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
        }

        input[disabled] {
            background: #f1f1f1;
            color: #666;
            cursor: not-allowed;
        }

        textarea {
            resize: vertical;
        }

        .error {
            color: #e63946;
            font-size: 13px;
            margin-top: 4px;
            display: block;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background: #2563eb;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        button:hover {
            background: #1e4fd6;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Edit Blog</h1>

        <form action="{{ route('updateblog', $blogs->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title', $blogs->title) }}">
                @error('title') <span class="error">{{ $message }}</span> @enderror
            </div>


            <div class="form-group">

                <label>Author</label>
                <input type="text" value="{{ Auth::user()->name }}" disabled>
                <input type="hidden" name="author" value="{{ Auth::user()->name }}">
            </div>


            <div class="form-group">
                <label>Content</label>
                <textarea name="contents" rows="6">{{ old('contents', $blogs->contents) }}</textarea>
                @error('contents') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="category">
                    <option value="">Select Category</option>

                    <option value="Technology" {{ old('category', $blogs->category) == 'Technology' ? 'selected' : '' }}>
                        Technology
                    </option>

                    <option value="Travel" {{ old('category', $blogs->category) == 'Travel' ? 'selected' : '' }}>
                        Travel
                    </option>

                    <option value="Lifestyle" {{ old('category', $blogs->category) == 'Lifestyle' ? 'selected' : '' }}>
                        Lifestyle
                    </option>

                    <option value="Education" {{ old('category', $blogs->category) == 'Education' ? 'selected' : '' }}>
                        Education
                    </option>

                    <option value="Kids" {{ old('category', $blogs->category) == 'Kids' ? 'selected' : '' }}>
                        Kids
                    </option>

                    <option value="Health" {{ old('category', $blogs->category) == 'Health' ? 'selected' : '' }}>
                        Health
                    </option>

                    <option value="Biography" {{ old('category', $blogs->category) == 'Biography' ? 'selected' : '' }}>
                        Biography
                    </option>

                </select>

                @error('category')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>


          
            <button type="submit">Update Blog</button>
        </form>
    </div>

</body>

</html>