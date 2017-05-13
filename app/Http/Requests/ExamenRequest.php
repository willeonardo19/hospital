<?php

namespace hospital\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamenRequest extends FormRequest
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
            'examen'     =>      'min:2|max:250|required'
            
        ];
    }
    public function messages(){
        return [
            'examen.required'    => 'Debe de llenar el campo Nombre del exámen ',
            'examen.min'         => 'El campo Nombre del exámen debe de contener más de 2 carácteres.',
            'examen.max'         => 'El campo Nombre del exámen debe de contener menos de 250 carácteres.'
        ];
    }
}
