<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use Redirect;

class HomeController extends Controller
{
    public function __construct()
    {
        // any middleware
    }

    public function index()
    {
        $posts = Post::where('is_published', true)->orderBy('published_at', 'desc')->get();

        return view('blog.index', [
            'posts' => $posts
        ]);
    }

    public function view($slug)
    {
        $post = Post::getPost($slug)->first();

        if(! $post)
        {
            return Redirect::route('home');
        }

        return view('blog.view', [
            'post' => $post
        ]);
    }
}
