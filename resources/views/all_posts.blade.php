<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts - My Blog</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header class="bg-blue-500 text-white py-4 px-6">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">My Blog</h1>
        </div>
    </header>

    <main class="container mx-auto my-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse ($posts as $post)
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-lg font-bold mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-600">{{ $post->description }}</p>
                    <a href="{{ route('post_details', $post->id) }}" class="block mt-2 text-blue-500">Read More</a>
                </div>
            @empty
                <div class="bg-white p-4 rounded shadow">
                    <p class="text-lg font-bold mb-2">No posts found.</p>
                </div>
            @endforelse
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
