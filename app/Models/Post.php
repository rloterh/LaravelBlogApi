<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // Validation rules for creating/updating a Post
    public static function validationRules()
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
