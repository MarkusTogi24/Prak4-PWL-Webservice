<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => Post::all()
        ]);
    }

    public function detail($id)
    {
        return view('detail', [
            'post' => Post::findOrFail($id),
            'comments' => Comment::query()->where('post_id', $id)->get()
        ]);
    }
}
