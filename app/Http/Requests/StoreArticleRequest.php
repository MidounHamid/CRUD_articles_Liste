<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            //
            "designation" => ["required","string","min:3"],
            "prix_ht" => ["required","numeric","min:5"],
            "tva" => ["required", "numeric","min:0","max:20"]
        ];
    }
    public function messages(): array
    {
        return [
            'designation.required' => 'The designation field is required.',
            'designation.string' => 'The designation must be a string.',
            'designation.min' => 'The designation must be at least 3 characters.',
            'designation.unique' => 'The designation must be unique.',
            'prix_ht.required' => 'The price field is required.',
            'prix_ht.numeric' => 'The price must be a number.',
            'prix_ht.min' => 'The price must be at least 5.',
            'prix_ht.regex' => 'The price must be in a valid format (e.g., 10.99).',
            'tva.required' => 'The TVA field is required.',
            'tva.numeric' => 'The TVA must be a number.',
            'tva.min' => 'The TVA must be at least 0.',
            'tva.max' => 'The TVA must not exceed 20.',
        ];
    }

}
