<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name'=>'required',
            'validate_date'=>'required',
            'prize'=>'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'O nome é obrigatório',
            'validate_date.required'=>'A data de validade é obrigatória',
            'prize.required'=>'O preço é obrigatório',
        ];
    }
}
