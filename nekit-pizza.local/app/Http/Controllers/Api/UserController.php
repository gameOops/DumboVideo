<?php

namespace App\Http\Controllers\Api;

use App\Chanel;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Interfaces\UserInterfaces\UserInterface;
use App\Http\Requests\Channel\BackgroundImageRequest;

class UserController extends Controller
{
    /**
     * @var ImageService
     * @var UserInterface
     */
    private $imageService;
    private $userInerface;

    public function __construct(ImageService $imageService, UserInterface $userInerface)
    {
        $this->imageService = $imageService;
        $this->userInerface = $userInerface;
    }

    public function get(Request $request)
    {
        return User::with('channel')->where('remember_token',$request['token'])->first();
    }

    public function change_bg(BackgroundImageRequest $backgroundImageRequest)
    {
        $channel = $this->userInerface->__get_user_channel($backgroundImageRequest['token']);

        if ($backgroundImageRequest->hasFile('image')) {
            $image = $this->imageService->uploadImage($backgroundImageRequest->file('image'));
        }

        $channel->bg = $image;
        $channel->save();

        return $channel;
    }

    public function test(Request $request)
    {
        return $this->userInerface->__is_valid_token($request['token']);
    }
}
