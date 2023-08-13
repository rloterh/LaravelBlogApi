<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class BioController extends Controller {
    public function getPostUser() {
        $user = Auth::user();
        $user->load('posts');
        
        return response()->json(['user' => $user]);
    }
}
