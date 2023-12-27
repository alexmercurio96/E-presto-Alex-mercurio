<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
        'name' => 'required|min:4',
        'description' => 'required|max:1000', 
        'img'=> 'image'
        ];
    }

    public function messages(): array
{
    return [
        'name.required' => 'campo obbligatorio',
      
        'img.image'=> 'non hai passato un file di tipo immagine',
        
        'description.max' => 'massimo 1000 caratteri',

        'name.min'=> 'minimo 4 caratteri',

        'description.required' => 'campo obbligatorio'
    ];
}

}
