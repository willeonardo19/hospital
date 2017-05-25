<?php

namespace hospital\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiagRequest extends FormRequest
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
            'motivo_cons'            =>      'min:2|max:250|required',
            'hist_enfermedad'        =>      'min:2|max:250|required',
            'imp_clinica'            =>      'min:2|max:250|required',
            'tratamiento'            =>      'min:2|max:250|required'
        ];
    }
    public function messages(){
        return [
            'motivo_cons.required'    => 'Debe de llenar el campo Motivo de consulta ',
            'motivo_cons.min'         => 'El campo Motivo de consulta debe de contener más de 2 carácteres.',
            'motivo_cons.max'         => 'El campo Motivo de consulta debe de contener menos de 250 carácteres.',
            'hist_enfermedad.required'=> 'Debe de llenar el campo Historial enfermedad ',
            'hist_enfermedad.min'     => 'El campo Historial enfermedad debe de contener más de 2 carácteres.',
            'hist_enfermedad.max'     => 'El campo Historial enfermedad debe de contener menos de 250 carácteres.',
            'imp_clinica.required'    => 'Debe de llenar el campo Impresión clinica',
            'imp_clinica.min'         => 'El campo Impresión clinica debe de contener más de 2 carácteres.',
            'imp_clinica.max'         => 'El campo Impresión clinica debe de contener menos de 250 carácteres.',
            'tratamiento.required'    => 'Debe de llenar el campo Tratamiento',
            'tratamiento.min'         => 'El campo Tratamiento debe de contener más de 2 carácteres.',
            'tratamiento.max'         => 'El campo Tratamiento debe de contener menos de 250 carácteres.',

        ];
    }
}
