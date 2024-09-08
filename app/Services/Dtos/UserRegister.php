<?php
namespace App\Services\Dtos;

class UserRegister
{
    public string $name;
    public string $email;
    public string $password;
    public ?string $phoneNumber;
    public ?string $institutionalDetails;
    public ?string $address;
}