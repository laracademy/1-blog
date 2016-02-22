<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        // any middleware
    }

    public function index()
    {
        return view('blog.index');
    }

    public function view($slug)
    {
        return view('blog.view', [
            'slug' => $slug
        ]);
    }
}
