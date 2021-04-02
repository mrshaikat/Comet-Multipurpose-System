<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::where('trash', false)->get();
        $published = Post::where('trash', false)->get()->count();
        $trash = Post::where('trash', true)->get()->count();
        return view('admin.post.index', [
            'all_data' => $data,
            'published_data' => $published,
            'trash_data' => $trash,
        ]);
    }

    /**
     * Display Post Trash Show
     *
     * @return \Illuminate\Http\Response
     */
    public function postTrashShow()
    {
        $data = Post::where('trash', true)->get();
        $published = Post::where('trash', false)->get()->count();
        $trash = Post::where('trash', true)->get()->count();
        return view('admin.post.trash', [
            'all_data' => $data,
            'published_data' => $published,
            'trash_data' => $trash,
        ]);
    }


    /**
     * Display Post Trash Update
     *
     * @return \Illuminate\Http\Response
     */
    public function postTrashUpdate($id)
    {
        $trash_data = Post::find($id);

        if ($trash_data->trash == false) {
            $trash_data->trash = true;
        } else {
            $trash_data->trash = false;
        }

        $trash_data->update();

        return back();
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Category::all();
        $tag = Tag::all();
        return view('admin.post.create', [
            'all_cat'  => $cat,
            'all_tag'  => $tag,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Post Validation
        $this->validate($request, [
            'title'  => ['required', 'unique:posts'],
            'content'  => 'required',
        ]);




        //Post Single Image Unique Name
        $unique_file_name = '';
        if ($request->hasFile('post_img')) {
            $img = $request->file('post_img');
            $unique_file_name = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('admin/media/posts/'), $unique_file_name);
        }

        //Post Multiple Image Unique Name
        $gall_images = [];
        if ($request->hasFile('post_gall')) {
            foreach ($request->file('post_gall') as $post_gall) {
                $unique_gall_name = md5(time() . rand()) . '.' . $post_gall->getClientOriginalExtension();

                $post_gall->move(public_path('admin/media/posts/'), $unique_gall_name);
                array_push($gall_images, $unique_gall_name);
            }
        }



        $post_featured = [
            'post_type'    => $request->post_type,
            'post_img'    => $unique_file_name,
            'post_gall'    => $gall_images,
            'post_audio'    => $request->post_audio,
            'post_video'    => $request->post_video,
        ];






        Post::create([
            'title'  => $request->title,
            'slug'  => Str::slug($request->title),
            'featured'  => json_encode($post_featured),
            'content'  => $request->content,
        ]);

        return redirect()->back()->with('success', 'Post added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = Post::find($id);
        $delete_data->delete();

        return redirect()->back()->with('success', 'Post deleted Permanently');
    }
}