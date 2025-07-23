<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'surname' => 'nullable',
            'phone_number' => 'nullable|unique:clients,phone_number',
            'email' => 'nullable|email|unique:clients,email',
            'address' => 'nullable',
            'comment' => 'nullable',
        ];
    }
    public function messages(): array
    {
        return [
          'required' => "To pole jest wymagane.",
            'phone_number.unique' => 'Podany numer telefonu już istnieje.',
            'email.unique' => 'Podany email już istnieje.',
            'email' => 'Podany adres email jest niepoprawny.',
        ];
    }
}
