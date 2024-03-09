<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'code' => 'required|string|max:250',
            'name' => 'required|string|max:250',
            'quantite_en_stock' => 'required|integer|min:1|max:10000',
            'prix' => 'required',
            'description' => 'nullable|string',
            'photo'
        ];
    }
}
