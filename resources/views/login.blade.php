<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My Blog</title>
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
            <h2 class="text-2xl font-bold mb-4">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-2 border rounded @error('email') border-red-500 @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" class="w-full p-2 border rounded @error('password') border-red-500 @enderror" required autocomplete="current-password">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox" name="remember" id="remember">
                        <span class="ml-2 text-gray-700">Remember Me</span>
                    </label>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Login</button>
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
