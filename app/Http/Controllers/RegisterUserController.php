<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Services\AuthService;
use App\Services\UserRegisterService;
use Illuminate\Support\Facades\App;

class RegisterUserController extends Controller
{
    private UserRegisterService $userRegisterService;
    private AuthService $authService;

    public function __construct()
    {
        $this->userRegisterService = App::make(UserRegisterService::class);
        $this->authService = App::make(AuthService::class);
    }

    public function register(RegisterUserRequest $request)
    {
        $user = $this->userRegisterService->registerUser($request->getValidatedData());
        $token = $this->authService->generateAccessToken($user);

        return response()->json([
            'token' => $token,
            'message' => __('Registration was successful')
        ]);
    }
}
