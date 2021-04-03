<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Blog Page Show
     */
    public function showBlogPage()
    {
        $all_posts = Post::where('status', true)->latest()->paginate(3);
        return view('frontend.blog', [
            'all_posts' => $all_posts
        ]);
    }
}