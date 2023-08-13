<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller {
    public function index() {
        $posts = Post::with(['user', 'category', 'likes', 'comments.user'])->orderBy('created_at', 'desc')->get();
        return response()->json(['posts' => $posts]);
    }
}
