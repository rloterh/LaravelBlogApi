<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post - My Blog</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header class="bg-blue-500 text-white py-4 px-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">My Blog</h1>
        </div>
    </header>

    <main class="container mx-auto my-4">
        <div class="max-w-md mx-auto bg-white rounded p-6 shadow">
            <h2 class="text-2xl font-bold mb-4">Edit Post</h2>
            <form action="{{ route('update_post', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                    <input type="text" name="title" id="title" class="w-full p-2 border rounded @error('title') border-red-500 @enderror" value="{{ $post->title }}" required autofocus>
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                    <textarea name="description" id="description" class="w-full p-2 border rounded @error('description') border-red-500 @enderror" required>{{ $post->description }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="image" class="block text-gray-700 font-bold mb-2">Image</label>
                    <input type="file" name="image" id="image" class="w-full @error('image') border-red-500 @enderror">
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Update Post</button>
                </div>
            </form>
        </div>
    </main>

    <footer class="bg-gray-200 text-gray-600 py-4 px-6">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} My Blog. All rights reserved.
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
