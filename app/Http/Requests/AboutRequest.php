<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $number
 */
class AboutRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'number' => only_numbers($this->number),
        ]);
    }

    public function rules(): array
    {
        return [
            'number' => ['required', 'max:20'],
            'email' => ['required', 'email', 'max:255'],
            'image' => ['nullable', 'file', 'mimes:png,jpg,jpeg'],
            'description' => ['required', 'string', 'max:400'],
        ];
    }

    public function attributes(): array
    {
        return [
            'number' => 'número',
            'email' => 'e-mail',
            'image' => 'imagem',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'max' => 'O campo :attribute deve ter no máximo :max caracteres.',
            'email' => 'O campo :attribute deve ser um e-mail válido.',
            'file' => 'O campo :attribute deve ser uma imagem válida.'
        ];
    }
}
