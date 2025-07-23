<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
                'client_id' => 'required|numeric|exists:clients,id',
                'order_status' => [Rule::in(['nowe', 'w realizacji', 'zrealizowane', 'anulowane'])],
                'price' => 'required|numeric',
                'order_items' => 'required',
                'end_date' => 'nullable|date',
                'comment' => 'nullable',
        ];
    }
    public function messages(): array
    {
        return [
            'client_id.required' => 'Pole kilent jest wymagane',
            'client_id.numeric' => 'Pole kilent jest niepoprawne',
            'client_id.exists' => 'Podany klient nie istnieje',
            'order_status.in' => 'Wartość pola status jest nieprawidłowa',
            'price.required' => 'Pole cena jest wymagane',
            'price.numeric' => 'Pole cena jest niepoprawne',
            'order_items.required' => 'Pole zamówienie jest wymagane',
            'end_date.date' => 'Pole data jest niepoprawne',
        ];
    }
}
