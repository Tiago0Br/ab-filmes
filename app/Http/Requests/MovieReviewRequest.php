<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MovieReviewRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'rating' => ['integer', 'between:1,5'],
            'comment' => ['string'],
        ];
    }

    public function messages(): array
    {
        return [
            'rating.integer' => 'A avaliação deve ser um número inteiro.',
            'rating.between' => 'A avaliação deve estar entre :min e :max.',
            'comment.string' => 'O comentário é obrigatório.',
        ];
    }
}
