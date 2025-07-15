<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return [
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'password_confirmation' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Informe o nome',
            'email.required' => 'Informe o e-mail',
            'password.required' => 'Informe a senha',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres',
            'password.confirmed' => 'Senhas não conferem',
            'password_confirmation.required' => 'Confirme a senha',
            'email.unique' => 'E-mail já registrado',
        ];
    }
}
