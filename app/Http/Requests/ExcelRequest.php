<?php

namespace hospital\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExcelRequest extends FormRequest
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
             'file'     =>      'required|mimes:xls,xlsx|max:10240',

        ];
    }
     public function messages(){
        return [
            'file.required'    => 'Debe seleccionar un archivo para subir.',
            'file.mimes'       => 'Debe de seleccionar un archivo excel.',
            'file.max'         => 'El archivo no debe de ser de mas de 10MB.'
        ];
    }
}
