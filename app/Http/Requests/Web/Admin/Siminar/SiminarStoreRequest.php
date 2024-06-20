<?php

namespace App\Http\Requests\Web\Admin\Siminar;

use Illuminate\Foundation\Http\FormRequest;

class SiminarStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'date' => ['required', 'date'],
            'description' => ['required', 'string', 'min:10', 'max:255'],
        ];
    }
}
