<?php

namespace App\Http\Requests\Portfolio;

use Illuminate\Foundation\Http\FormRequest;

class CreatePortfolioRequest extends FormRequest
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
            'slug' => ['required', 'string', 'max:255'],
            'img' => ['required', 'image'],
            'body' => ['required'],
            'tech' => ['required', 'string', 'max:255'],
            'time' => ['required', 'string', 'max:255'],
            'support' => ['required', 'string', 'max:255'],
            'cost' => ['required', 'string', 'max:255'],
            'lang' => ['required', 'string', 'max:255']
        ];
    }
}
