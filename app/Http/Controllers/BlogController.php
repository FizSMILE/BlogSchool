<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    public function index()
    {

        return view('home', [
            "title" => "Home",
            "posts" => Blog::latest()->filter(request(['search']))->paginate(15)->withQueryString()
        ]);
    }

    public function show(Blog $bg)
    {
        return view('blog', [
            "title" => "Single Post",
            "post" => $bg
        ]);
    }
}
