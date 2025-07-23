<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreExpenseRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'category' => ['required', Rule::in(['promocja_firmy', 'materiały', 'inne'])],
            'price' => 'required|numeric',
            'link' => 'nullable',
            'date' => 'nullable|date',
            'comment' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'in' => 'Wartość tego pola jest niepoprawna.',
            'required' => 'To pole jest wymagane.',
            'numeric' => 'Wartość tego pola jest niepoprawna.',
            'date' => 'Wartość tego pola jest niepoprawna.',
        ];
    }
}
