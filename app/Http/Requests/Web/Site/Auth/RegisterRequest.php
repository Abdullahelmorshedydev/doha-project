<?php

namespace App\Http\Requests\Web\Site\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => ['required', 'email', 'min:3', 'max:255', 'unique:users,email'],
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'phone' => ['required', 'string', 'min:10' ,'max:13'],
            'password' => ['required', 'string' ,'min:6' ,'max:255', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:6', 'max:255'],
        ];
    }
}
