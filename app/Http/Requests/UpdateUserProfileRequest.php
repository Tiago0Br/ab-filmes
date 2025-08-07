<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;
use Illuminate\Validation\Rule;

/**
 * @property-read UploadedFile $avatar
 */
class UpdateUserProfileRequest extends FormRequest
{
    private const string IMAGE_EXTENSIONS = 'png';
    private const int MAX_IMAGE_SIZE = 5120;

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
            'avatar' => ['nullable', 'image', 'extensions:' . self::IMAGE_EXTENSIONS, 'max:' . self::MAX_IMAGE_SIZE],
            'name' => ['required', 'min:3'],
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore(auth()->user()->id)
            ],
            'password' => ['nullable', 'min:8', 'confirmed:new_password'],
            'new_password' => [Rule::requiredIf(fn () => $this->filled('password'))],
        ];
    }

    public function messages(): array
    {
        return [
            'avatar.image' => 'Adicione uma imagem válida',
            'avatar.extensions' => 'A imagem deve ser no formato PNG',
            'avatar.max' => 'A imagem deve ter no máximo 5MB',
            'name.required' => 'Informe o nome',
            'email.required' => 'Informe o e-mail',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres',
            'new_password.required' => 'Confirme a senha',
            'password.confirmed' => 'Senhas não conferem',
            'email.unique' => 'E-mail já registrado',
        ];
    }
}
