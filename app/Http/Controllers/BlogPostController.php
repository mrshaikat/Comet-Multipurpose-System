<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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

    /**
     * Search Post By Category
     */
    public function searchPostByCategory($slug)
    {
        $search_category = Category::where('slug', $slug)->where('status', true)->first();

        return view('frontend.pages.search-category', [
            'all_cat_search' => $search_category
        ]);
    }

    public function searchPostByTag($slug)
    {
        $search_tag = Tag::where('slug', $slug)->where('status', true)->first();

        return view('frontend.pages.search-tag', [
            'all_tag_search' => $search_tag
        ]);
    }

    public function searchPostBySearchBar(Request $request)
    {
        $search = $request->search_bar;

        $all_posts = Post::where('title', 'like', '%' . $search . '%')->orWhere('content', 'like', '%' . $search . '%')->get();

        return view('frontend.pages.searchbar', [
            'posts'  => $all_posts
        ]);
    }
}