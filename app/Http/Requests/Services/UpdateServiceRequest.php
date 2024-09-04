<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
            'iconClass' => ['required', 'max:255'],
            'body' => ['required'],
            'aos' => ['required', 'max:255'],
            'easing' => ['required', 'max:255'],
            'delay' => ['required', 'max:255'],
            'offset' => ['required', 'max:255']
        ];
    }
}
