<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApiResource;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return ApiResource::collection($posts);
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->content = $request->content;
        $comment->post_id = $request->post_id;
        if($comment->save())
        {
            return new ApiResource($comment);
        }
    }
    
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $comments = Comment::query()->where('post_id', $id)->get();
        return [
            'post'      => new ApiResource($post),
            'comments'  => new ApiResource($comments),
        ];
    }

    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
