<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
                'client_id' => 'required|numeric|exists:clients,id',
                'order_status' => ['required', Rule::in(['nowe', 'w realizacji', 'zrealizowane', 'anulowane'])],
                'price' => 'required|numeric',
                'order_items' => 'required',
                'end_date' => 'nullable|date',
                'comment' => 'nullable',
        ];
    }
    public function messages(): array
    {
        return [
            'required' => 'To pole jest wymagane.',
            'price.numeric' => 'To pole powinno być liczbą.',
            'client_id.numeric' => 'Wartość tego pola jest niepoprawna.',
            'exists' => 'Podany klient nie istnieje.',
            'in' => 'Wartość tego pola jest niepoprawna.',
            'date' => 'Wartość tego pola jest niepoprawna.',
        ];
    }
}
