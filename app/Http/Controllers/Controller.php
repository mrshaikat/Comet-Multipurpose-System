<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Get Slug Name
     */

    protected function getSlug($slug_data)
    {
        return str_replace(' ', '-', $slug_data);
    }



    /**
     * Get Video Link
     */
    protected function getEmbded($link)
    {
        if ($link) {
            if (str_contains($link, 'youtube')) {
                return str_replace('watch?v=', 'embed/', $link);
            } elseif (str_contains($link, 'vimeo')) {
                return str_replace('vimeo.com', 'player.vimeo.com/video', $link);
            } else {
                return 'invalid video link';
            }
        }
    }
    /**
     * Image Upload
     */

    protected function imageUpload($request, $file, $path)
    {
        if ($request->hasFile($file)) {
            $img = $request->file($file);
            $file_name = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path($path), $file_name);
        } else {
            $file_name = '';
        }

        return $file_name;
    }
}