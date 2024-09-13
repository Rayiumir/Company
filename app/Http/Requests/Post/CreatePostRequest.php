<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'img' => ['required', 'image'],
            'category_id' => ['required', 'string'],
            'content' => ['required'],
            'aos' => ['required', 'max:255'],
            'easing' => ['required', 'max:255'],
            'delay' => ['required', 'max:255'],
            'offset' => ['required', 'max:255']
        ];
    }
}
