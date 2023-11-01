<?php

namespace App\Http\Requests;

use App\Enum\CommentableEnum;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class CommentStoreRequest extends FormRequest
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
        $rules = [
            'song_id' => 'required|exists:songs,id',
            'comment' => 'required|max:255',
            'commentable_type' => [
                'required',
                new Enum(CommentableEnum::class)
            ],
        ];
        if ($this->commentable_type == 'User') {
            $rules['commentable_id'] = 'required | exists:users,id';
        } else {
            $rules['commentable_id'] = 'required | exists:artists,id';
        }
        return $rules;
    }

    public function prepareForValidation(): void
    {
        $this->commentable_type = ucfirst(strtolower($this->commentable_type));
    }
}
