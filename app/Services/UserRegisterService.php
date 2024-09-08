<?php
namespace App\Services;

use App\Models\User;
use App\Services\Dtos\UserRegister as UserRegisterDto;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserRegisterService
{
    public function registerUser(UserRegisterDto $userRegisterDto): User
    {
        $user = User::create([
            'name' => $userRegisterDto->name,
            'email' => $userRegisterDto->email,
            'password' => Hash::make($userRegisterDto->password),
        ]);

        $user->extraInfo()->create([
            'uuid' => Str::uuid(),
            'phone_number' => $userRegisterDto->phoneNumber,
            'institutional_details' => $userRegisterDto->institutionalDetails,
            'address' => $userRegisterDto->address,
        ]);

        return $user;
    }
}