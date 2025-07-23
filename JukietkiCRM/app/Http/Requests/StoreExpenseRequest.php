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
            'category.required' => 'Pole kategoria jest wymagane.',
            'category.in' => 'Pole kategoria jest niepoprawne.',
            'price.required' => 'Pole cena jest wymagane.',
            'price.numeric' => 'Pole cena jest niepoprawne.',
            'date.date' => 'Pole data jest niepoprawne.',
        ];
    }
}
