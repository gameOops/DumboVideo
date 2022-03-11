<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\VideoService;
use App\Http\Requests\VideoRequest;

class VideoController extends Controller
{
    /**
     * @var VideoService
     */
    private $videoService;

    public function __construct(VideoService $videoService)
    {
        $this->videoService = $videoService;
    }

    public function get(Request $request)
    {
        return $this->videoService->get($request['id']);
    }

    public function watch(Request $request)
    {
        return $this->videoService->watch($request['video_id']);
    }

    public function index() {
        return $this->videoService->index();
    }

    public function create(VideoRequest $videoRequest) {
        return $this->videoService->create($videoRequest);
    }
}
