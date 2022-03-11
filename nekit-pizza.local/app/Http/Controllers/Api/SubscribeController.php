<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SubscriberService;

class SubscribeController extends Controller
{
    /**
     * @var SubscriberService
     */
    private $subscriberService;

    public function __construct(SubscriberService $subscriberService)
    {
        $this->subscriberService = $subscriberService;
    }

    public function index(Request $request)
    {
        return $this->subscriberService->index($request['id']);
    }

    public function check(Request $request)
    {
        return $this->subscriberService->checkSub($request['token'],$request['channel_id']);
    }

    public function create(Request $request)
    {
        return $this->subscriberService->create($request['token'],$request['channel_id']);
    }
}
