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
        $data = Post::where('status', true)->where('trash', false)->latest()->paginate(10);
        return view('frontend.pages.blog', [
            'all_posts' => $data
        ]);
    }
}