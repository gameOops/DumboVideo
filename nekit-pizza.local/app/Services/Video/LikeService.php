<?php


namespace App\Services\Video;

use App\Like;
use App\Interfaces\UserInterfaces\UserInterface;

class LikeService
{
    /**
     * @var UserInterface
     */
    private $userInterface;

    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    public function index($data)
    {
        $channel = $this->userInterface->__get_user_channel($data->token);

        $like = Like::where('user_id',$channel->id)->where('video_id', $data->video_id)->first();

        if(isset($like))
        {
            $like->delete();
        } else {
            $like = new Like();
            $like->user_id = $channel->id;
            $like->video_id = $data->video_id;
            $like->save();
            return $like;
        }
    }
}
