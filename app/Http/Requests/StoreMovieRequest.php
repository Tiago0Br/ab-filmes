<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        $currentYear = date('Y');

        return [
            'title' => ['required', 'min:3', 'max:80'],
            'year' => ['required', 'numeric', 'min:1900', "max:{$currentYear}"],
            'category' => ['required', 'min:3', 'max:60'],
            'description' => ['required', 'min:3']
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Informe o título',
            'year.required' => 'Informe o ano',
            'category.required' => 'Informe a categoria',
            'description.required' => 'Informe a descrição',
            'title.min' => 'O título deve ter pelo menos 3 caracteres',
            'title.max' => 'O título deve ter menos de 80 caracteres',
            'year.min' => 'O ano deve ser maior que 1900',
            'year.max' => 'O ano deve ser menor que o ano atual',
            'category.min' => 'A categoria deve ter pelo menos 3 caracteres',
            'category.max' => 'A categoria deve ter menos de 60 caracteres',
            'description.min' => 'A descrição deve ter pelo menos 3 caracteres'
        ];
    }
}
