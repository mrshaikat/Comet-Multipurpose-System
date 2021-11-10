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


    public function showSingleBlogPage(Request $request, $slug)
    {
        $all_data = Post::where('slug', $slug)->first();

        //View Count

        $this->viewCount($all_data->id);

        // foreach ($all_data->categories as $cat) {
        //     $data_category = $cat->name;
        // }
        return view('frontend.pages.blog-single', [
            'data' => $all_data,

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

    /**
     * Search Post By Tags
     */
    public function searchPostByTag($slug)
    {
        $search_tag = Tag::where('slug', $slug)->where('status', true)->first();

        return view('frontend.pages.search-tag', [
            'all_tag_search' => $search_tag
        ]);
    }

    /**
     * Search Post By SearchBar
     */

    public function searchPostBySearchBar(Request $request)
    {
        $search = $request->search_bar;

        $all_posts = Post::where('title', 'like', '%' . $search . '%')->orWhere('content', 'like', '%' . $search . '%')->get();

        return view('frontend.pages.searchbar', [
            'posts'  => $all_posts
        ]);
    }

    /**
     * Single Post Count
     */

    private function viewCount($post_id)
    {

        $post_view_count = Post::find($post_id);
        $old_views = $post_view_count->post_views;
        $post_view_count->post_views = $old_views + 1;
        $post_view_count->update();
    }
}