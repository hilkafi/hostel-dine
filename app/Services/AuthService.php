<?php
namespace App\Services;

use App\Models\User;

class AuthService
{
    public function generateAccessToken(User $user): string
    {
        $token = $user->createToken('Personal Access Token', ['*']);
        return $token->accessToken;
    }
}