<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicoRequest extends FormRequest
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
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|min:11',
            'crm' => 'required|string|max:18'
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'o campo ::attribute deve possuir um valor válido',
            'cpf.min' => 'O campo cpf deve ter no minimo 11 caracteres',
            'cpf.max' => 'O campo cpf deve ter no maximo 14 caracteres',
            'crm.max' => 'O campo crm deve ter no maximo 18 caracteres',
        ];
    }
}
