<?php

namespace App\Http\Requests;

use App\Services\Dtos\UserRegister as UserRegisterDto;
use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'email' => 'required|string',
            'password' => 'required|string',
            'confirm_password' => 'required|string',
            'phone_number' => 'nullable|string',
            'institutional_details' => 'nullable|string',
            'address' => 'nullable|string'
        ];
    }

    public function getValidatedData(): UserRegisterDto
    {
        $validatedData = $this->validated();

        $userRegister = new UserRegisterDto();
        $userRegister->name = isset($validatedData['name']) ? $validatedData['name'] : '';
        $userRegister->email = isset($validatedData['email']) ? $validatedData['email'] : '';
        $userRegister->password = isset($validatedData['password']) ? $validatedData['password'] : '';
        $userRegister->institutionalDetails = isset($validatedData['institutional_details']) ? $validatedData['institutional_details'] : '';
        $userRegister->phoneNumber = isset($validatedData['phone_number']) ? $validatedData['phone_number'] : '';
        $userRegister->address = isset($validatedData['address']) ? $validatedData['address'] : '';

        return $userRegister;
    }
}
