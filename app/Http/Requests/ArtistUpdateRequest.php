<?php

namespace App\Http\Requests;

use App\Enum\GenderEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class ArtistUpdateRequest extends FormRequest
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
            'name' => 'sometimes|string|max:255',
            'dob' => 'sometimes|date|nullable',
            'gender' => [
                'sometimes',
                'nullable',
                new Enum(GenderEnum::class)
            ],
            'address' => 'sometimes|string|max:255|nullable',
            'first_release_year' => 'sometimes|integer|nullable|min:1700|max:' . now()->year,
            'no_of_albums_released' => 'sometimes|integer|nullable'
        ];
    }

    public function prepareForValidation()
    {
        $this->first_release_year = intval($this->first_release_year);
    }
}
