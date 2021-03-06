<?php

namespace App\Http\Controllers\Author;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Like;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavePostsController extends Controller
{
    public function likePost()
    {
        $posts = Post::all();
        $likes = Auth::user()->likes()->paginate(15);
        return view('author.like-posts', compact('posts', 'likes'));
    }

    public function commentPost()
    {
        $posts = Post::all();
        $comments = Auth::user()->comments()->paginate(15);
        return view('author.comment-posts', compact('posts', 'comments'));
    }
}
