<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;

/**
 * @property-read UploadedFile $cover
 */
class StoreMovieRequest extends FormRequest
{
    private const string IMAGE_EXTENSIONS = 'png';
    private const int MAX_IMAGE_SIZE = 5120;

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
        $imageExtensions = self::IMAGE_EXTENSIONS;
        $maxImageSize = self::MAX_IMAGE_SIZE;

        return [
            'title' => ['required', 'min:3', 'max:80'],
            'year' => ['required', 'numeric', 'min:1900', "max:$currentYear"],
            'category' => ['required', 'min:3', 'max:60'],
            'description' => ['required', 'min:3'],
            'cover' => ['required', 'image', "extensions:$imageExtensions", "max:$maxImageSize"]
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
            'description.min' => 'A descrição deve ter pelo menos 3 caracteres',
            'cover.required' => 'Adicione a imagem de capa do filme',
            'cover.image' => 'Deve ser uma imagem válida',
            'cover.extensions' => 'A imagem deve ser no formato PNG',
            'cover.max' => 'A imagem deve ter no máximo 5MB'
        ];
    }
}
