<?php

namespace App\Http\Controllers\Administration\Blog;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

use App\Post;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::orderBy('published_at', 'desc')->get();

        return view('administration.blog.index', [
            'posts' => $posts
        ]);
    }


    public function create()
    {
        return view('administration.blog.create');
    }

    public function store(Request $request)
    {
        // Rules
        $rules = [
            'title'   => 'required',
            'content' => 'required',
        ];

        // Validate those rules
        $this->validate($request, $rules);

        // validation has passed
        Post::create([
            'title'        => $request->input('title'),
            'content'      => $request->input('content'),
            'slug'         => str_slug($request->input('title')),
            'is_published' => false
        ]);

        // todo show success message

        return Redirect::route('administration.blog');
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->first();

        if(! $post)
        {
            return Redirect::route('administration.blog');
        }

        return view('administration.blog.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request)
    {
        // Rules
        $rules = [
            'id'      => 'required|exists:posts,id',
            'title'   => 'required',
            'content' => 'required',
        ];

        // Validate those rules
        $this->validate($request, $rules);

        $post = Post::where('id', $request->input('id'))->first();

        // update info
        $post->title   = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return Redirect::route('administration.blog');
    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();

        if(! $post)
        {
            return Redirect::route('administration.blog');
        }

        $post->delete();

        return Redirect::route('administration.blog');
    }

    public function publish($id)
    {
        $post = Post::where('id', $id)->first();

        if(! $post)
        {
            return Redirect::route('administration.blog');
        }

        $post->publishPost();

        return Redirect::route('administration.blog');
    }

    public function unpublish($id)
    {
        $post = Post::where('id', $id)->first();

        if(! $post)
        {
            return Redirect::route('administration.blog');
        }

        $post->unpublishPost();

        return Redirect::route('administration.blog');
    }

}
