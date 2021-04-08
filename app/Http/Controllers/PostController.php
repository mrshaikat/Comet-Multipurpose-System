<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $data = Post::where('trash', false)->latest()->get();
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
        $cat = Category::where('status', true)->latest()->get();
        $tag = Tag::where('status', true)->latest()->get();
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



        //Video Link 

        // $youtube_link = $request->post_video;
        // $vimeo_link = $request->post_video;
        // $to_arry_youtube = explode(".", $youtube_link);
        // $to_arry_vimeo = explode("/", $vimeo_link);



        // if ($to_arry_youtube == 'youtube') {
        //     $video_link = str_replace('watch?v=', 'embed/', $youtube_link);
        // } else {
        //     $video_link = "https://player.vimeo.com/video" . '/' . $to_arry_vimeo[3];
        // }




        $post_featured = [
            'post_type'    => $request->post_type,
            'post_img'    => $unique_file_name,
            'post_gall'    => $gall_images,
            'post_video'    => str_replace('watch?v=', 'embed/', $request->post_video),
            'post_audio'    => $request->post_audio,

        ];








        $post_data = Post::create([
            'user_id'  => Auth::user()->id,
            'title'  => $request->title,
            'slug'  => Str::slug($request->title),
            'featured'  => json_encode($post_featured),
            'content'  => $request->content,
        ]);

        $post_data->categories()->attach($request->cat);
        $post_data->tags()->attach($request->tag);

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


    /**
     * Tag Inactive Status
     */

    public function StatusUpdateInactive($id)
    {

        $status_update = Post::find($id);

        $status_update->status = false;
        $status_update->update();
    }


    /**
     * Tag Active Status
     */

    public function StatusUpdateActive($id)
    {

        $status_update = Post::find($id);

        $status_update->status = true;
        $status_update->update();
    }
}