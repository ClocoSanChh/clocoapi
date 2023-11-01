<?php

namespace App\Http\Requests;

use App\Enum\GenreEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class SongUpdateRequest extends FormRequest
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
            'artist_id' => 'sometimes|exists:artists,id|max:255',
            'title' => 'sometimes|string|max:255',
            'album_name' => 'sometimes|string|max:255',
            'genre' => [
                'sometimes',
                'nullable',
                new Enum(GenreEnum::class)
            ],
        ];
    }

    public function prepareForValidation(): void
    {
        $this->artist_id = intval($this->artist_id);
    }
}
