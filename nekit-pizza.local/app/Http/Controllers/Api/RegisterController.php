<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\RegisterService;
use App\User;

class RegisterController extends Controller
{
    /**
     * @var RegisterService
     */
    private $registerService;

    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }

    public function create(RegisterRequest $registerRequest)
    {
        return $this->registerService->create($registerRequest);
    }
}
