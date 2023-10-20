<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            // employee_id
            'employee_id' => 'required|string|max:64',
            // employee_code
            'employee_code' => 'required|string|max:64',
            // name
            'name' => 'required|string|max:64',
            // E-mail
            'email' => 'required|string|email|max:255|unique:users',
            // Password -> 仮Password
            'password' => 'required|string|min:8',
        ];
    }
}
