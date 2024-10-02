<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a New Post</title>
</head>
<body>
    <h1>Create a New Blog Post</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display validation errors -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- resources/views/posts/create.blade.php -->
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>

    <label for="content">Content:</label>
    <textarea name="content" id="content" required></textarea>

    <button type="submit">Create Post</button>
</form>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif
</body>
</html>
