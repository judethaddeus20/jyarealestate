<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function uploadVideo(Request $request)
    {
        $this->validate($request, [
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        $video = new Video;
        if ($request->hasFile('video'))
        {
            $path = $request->file('video')->store('videos', ['disk' =>      'my_files']);
            $video->video = $path;
        }
        $video->save();
    
    }
}
