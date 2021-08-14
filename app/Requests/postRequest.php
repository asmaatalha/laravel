<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class postRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nameProduct' => 'required|unique:produit|max:255',
            'description' => 'required',
            'categorie'=>'required',
        ];
    }
    
    public function messages()
    {
        return [
            'nameProduct.required' => 'svp entre name produit',
            'description.required' => 'entre descreption',
            'categorie.unique'  => 'svp entre categorie'
        ];
    }

}