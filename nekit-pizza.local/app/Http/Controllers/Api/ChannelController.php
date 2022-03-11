<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ChannelService;

class ChannelController extends Controller
{
    /**
     * @var ChannelService
     */
    private $channelService;

    public function __construct(ChannelService $channelService)
    {
        $this->channelService = $channelService;
    }

    public function index(Request $request)
    {
        return $this->channelService->index($request['limit']);
    }

    public function get(Request $request)
    {
        return $this->channelService->get($request['id']);
    }

}
