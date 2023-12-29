<?php

namespace App\Http\Requests;



use Illuminate\Foundation\Http\FormRequest;

class MovieFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        // primo step cambiare il return da false a true altrimenti non funziona
    }

   
    public function rules(): array
    {
        return [
        'title' => 'required|min:4',
        // 'author' => 'required', 
        'body' => 'required|max:1000',
         'img'=> 'image'
        ];
    }

  /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'title.required' => 'campo obbligatorio',
        'body.required' => 'campo obbligatorio',
        'img.image'=> 'non hai passato un file di tipo immagine',
        
        'title.min'=> 'minimo 4 caratteri',
        'body.max' => 'massimo 1000 caratteri'
    ];
}

}
