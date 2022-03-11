<?php


namespace App\Services;

use App\Services\AuthService;
use Illuminate\Http\JsonResponse;

class LoginService
{
    /**
     * @var \App\Services\AuthService
     */
    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function authorize($data): JsonResponse
    {
        return $this->authService->attempt($data);
    }
}
