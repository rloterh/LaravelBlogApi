<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - My Blog</title>
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
            <h2 class="text-2xl font-bold mb-4">{{ $post->title }}</h2>
            <p class="text-gray-600 mb-6">{{ $post->description }}</p>
            <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="w-full mb-6 rounded">
            <div class="flex items-center">
                <span class="mr-2">{{ $post->likes }} Likes</span>
                <button class="bg-blue-500 text-white py-1 px-2 rounded hover:bg-blue-600" id="likeBtn">Like</button>
            </div>
            <div class="mt-6">
                <h3 class="text-xl font-bold mb-4">Comments</h3>
                <ul>
                    @forelse ($post->comments as $comment)
                        <li class="mb-2">
                            <span class="font-bold">{{ $comment->user->name }}:</span>
                            {{ $comment->content }}
                        </li>
                    @empty
                        <li>No comments yet.</li>
                    @endforelse
                </ul>
                <form action="{{ route('add_comment', $post->id) }}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <textarea name="content" id="content" rows="3" class="w-full p-2 border rounded @error('content') border-red-500 @enderror" required></textarea>
                        @error('content')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Add Comment</button>
                    </div>
                </form>
            </div>
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
