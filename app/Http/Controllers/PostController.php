<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller {
    public function index() {
        $posts = Post::with(['user', 'category', 'likes', 'comments.user'])->orderBy('created_at', 'desc')->get();
        return response()->json(['posts' => $posts]);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $imagePath = $request->file('image')->store('posts', 'public');

        $post = Auth::user()->posts()->create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'category_id' => $request->category_id,
        ]);

        return response()->json(['message' => 'Post created successfully', 'post' => $post], 201);
    }

    public function update(Request $request, Post $post) {
        $this->authorize('update', $post);
    
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image', // Allow updating the image, but it's optional
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }
    
        $postData = [
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ];
    
        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::disk('public')->delete($post->image);
            
            // Store the new image
            $imagePath = $request->file('image')->store('posts', 'public');
            $postData['image'] = $imagePath;
        }
    
        $post->update($postData);
    
        return response()->json(['message' => 'Post updated successfully', 'post' => $post]);
    }

    public function destroy(Post $post) {
        $this->authorize('delete', $post);

        Storage::disk('public')->delete($post->image);
        $post->delete();

        return response()->json(['message' => 'Post deleted successfully']);
    }

    public function like(Post $post) {
        Auth::user()->likes()->toggle($post);
        return response()->json(['message' => 'Like updated successfully']);
    }
}
