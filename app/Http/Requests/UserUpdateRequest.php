<?php

namespace App\Http\Requests;

use App\Enum\GenderEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class UserUpdateRequest extends FormRequest
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
            'firstname' => 'sometimes|string|max:255',
            'lastname' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|max:255|unique:users,email',
            'phone' => 'sometimes|string|max:255|nullable',
            'password' => 'sometimes|string|min:6',
            'dob' => 'sometimes|date|nullable',
            'gender' => [
                'sometimes',
                'nullable',
                new Enum(GenderEnum::class)
            ],
            'address' => 'sometimes|string|max:255|nullable'
        ];
    }
}
