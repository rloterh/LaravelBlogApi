<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function welcome()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $posts = Post::all();

        return view('welcome', compact('posts'));
    }
    
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Upload the image and get its URL
        //$imagePath = $request->file('image')->store('public/images');
        $imageUrl = null;
        if ($request->has('image')) {
            $imageUrl = $request->image;
        }

        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageUrl,
            'user_id' => auth()->user()->id,
        ]);

        return response()->json($post, 201);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post, 200);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        // Ensure the authenticated user owns the post
        if (auth()->user()->id !== $post->user_id) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $post = Post::findOrFail($id);

        // If a new image is uploaded, update the image URL
        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('public/images');
            // $imageUrl = asset('storage/images/' . basename($imagePath));
            $post->image = $imageUrl;
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return response()->json($post, 200);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Ensure the authenticated user owns the post
        if (auth()->user()->id !== $post->user_id) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $post->delete();
        return response()->json(['message' => 'Post deleted successfully'], 200);
    }

    public function like(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $user = auth()->user();

        // Check if the user has already liked the post
        if ($post->likes()->where('user_id', $user->id)->exists()) {
            return response()->json(['error' => 'User has already liked the post'], 400);
        }

        $post->likes()->attach($user->id);
        return response()->json(['message' => 'Post liked successfully'], 200);
    }

    public function comment(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $post = Post::findOrFail($id);
        $user = auth()->user();

        $comment = new Comment([
            'content' => $request->content,
            'user_id' => $user->id,
        ]);

        $post->comments()->save($comment);
        return response()->json(['message' => 'Comment added successfully'], 201);
    }
}
