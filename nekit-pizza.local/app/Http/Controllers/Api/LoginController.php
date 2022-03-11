<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\LoginService;
use App\Http\Requests\AuthRequest;

class LoginController extends Controller
{
    /**
     * @var LoginService
     */
    private $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function auth(AuthRequest $authRequest): JsonResponse
    {
        return $this->loginService->authorize($authRequest);
    }
}
