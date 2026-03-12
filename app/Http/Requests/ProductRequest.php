<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $required = $this->isMethod('POST') ? 'required' : 'sometimes|required';

        return [
            'name' => "{$required}|string|max:255",
            'description' => "{$required}|string",
            'brand' => "{$required}|string|max:255",
            'price' => "{$required}|numeric|min:0",
            'stock' => "{$required}|integer|min:0",
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório.',
            'name.max' => 'O nome pode ter no máximo 255 caracteres.',
            'description.required' => 'A descrição é obrigatória.',
            'brand.required' => 'A marca é obrigatória.',
            'brand.max' => 'A marca pode ter no máximo 255 caracteres.',
            'price.required' => 'O preço é obrigatório.',
            'price.numeric' => 'O preço deve ser um número válido.',
            'price.min' => 'O preço não pode ser negativo.',
            'stock.required' => 'O estoque é obrigatório.',
            'stock.integer' => 'O estoque deve ser um número inteiro.',
            'stock.min' => 'O estoque não pode ser negativo.',
        ];
    }
}
