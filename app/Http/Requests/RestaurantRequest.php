<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'address' => 'required|min:5',
            'description' => 'required|min:5',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'O Campo é obrigatório',
            'address.required' => 'O Campo é obrigatório',
            'description.required' => 'O Campo é obrigatório',
            '*.min' => 'A quantidade mínima de caracteres é 5 (cinco)'
        ];
    }



}
