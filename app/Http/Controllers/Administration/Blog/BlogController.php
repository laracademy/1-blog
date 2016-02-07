<?php

namespace App\Http\Controllers\Administration\Blog;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __construct()
    {
        // any middleware
    }

    public function index()
    {
        return 'I am the blog controller index page';
    }

    public function edit($id)
    {
        return "Got $id";
    }

}
