<?php


namespace App\Services;

use App\Services\ImageService;
use App\Chanel;
use App\User;
use App\Video;

class VideoService
{
    /**
     * @var \App\Services\ImageService
     */
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function get($id)
    {
        return Video::with('channel')->withCount('likes')->where('id',$id)->first();
    }

    public function watch($video_id)
    {
        $video = Video::where('id',$video_id)->first();

        $watch_count = $video->views;
        $watch_count++;
        $video->views = $watch_count;
        $video->save();

        return $watch_count;
    }

    public function index()
    {
        return Video::with('channel')->inRandomOrder()->get();
    }

    public function create($data)
    {
        $user = User::where('remember_token',$data->token)->first();
        $channel = Chanel::where('user_id',$user->id)->first();

        if ($data->hasFile('preview')) {
            $image = $this->imageService->uploadImage($data->file('preview'));
        }
        if ($data->hasFile('video')) {
            $videoUpload = $this->imageService->uploadVideo($data->file('video'));
        }

        $video = new Video();
        $video->user_id = $channel->id;
        $video->name = $data->name;
        $video->about = $data->about;
        $video->category = $data->category;
        $video->views = '0';
        $video->preview = $image;
        $video->src = $videoUpload;

        $video->save();

        return $video;
    }
}
