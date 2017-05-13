<?php

namespace hospital\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaboratorioRequest extends FormRequest
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
            'pdf_file'     =>      'required|mimes:pdf|max:10240'
          
        ];
    }
    public function messages(){
        return [
            'pdf_file.required'    => 'Debe seleccionar un archivo para subir.',
            'pdf_file.mimes'       => 'Debe de seleccionar un archivo formato pdf.',
            'pdf_file.max'         => 'El archivo no debe de ser de mas de 10MB.'
        ];
    }
}
