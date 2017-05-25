<?php

namespace hospital\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrecoRequest extends FormRequest
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
            'est_conciencia'       =>      'min:2|max:250|required',
            'ant_medicos'          =>      'min:2|max:250|required',
            'ant_quirurgicos'      =>      'min:2|max:250|required',
            'ant_alergicos'        =>      'min:2|max:250|required',
            'ant_traumaticos'      =>      'min:2|max:250|required',
            'ant_familiares'       =>      'min:2|max:250|required',
            'temp_oral'            =>      'min:2|max:250|required',
            'pr_arterial'          =>      'min:2|max:250|required',
            'fr_cardiaca'          =>      'min:2|max:250|required',
            'fr_respiratoria'      =>      'min:2|max:250|required',
            'peso'                 =>      'min:2|max:250|required',
            'talla'                =>      'min:2|max:250|required'
        ];
    }
     public function messages(){
        return [
            'est_conciencia.required'    => 'Debe de llenar el campo Estado de conciencia',
            'est_conciencia.min'         => 'El campo Estado de Conciencia debe de contener más de 2 letras.',
            'est_conciencia.max'         => 'El campo Estado de Conciencia  debe de contener menos de 250 letras.',
            'ant_medicos.required'       => 'Debe de llenar el campo Antecedentes médicos',
            'ant_medicos.min'            => 'El campo Antecedentes médicos debe de contener más de 2 letras.',
            'ant_medicos.max'            => 'El campo Antecedentes médicos debe de contener menos de 250 letras.',
            'ant_quirurgicos.required'   => 'Debe de llenar el campo Antecedentes quirúrgicos',
            'ant_quirurgicos.min'        => 'El campo Antecedentes quirúrgicos debe de contener más de 2 letras.',
            'ant_quirurgicos.max'        => 'El campo Antecedentes quirúrgicos debe de contener menos de 250 letras.',
            'ant_alergicos.required'     => 'Debe de llenar el campo Antecedentes alérgicos',
            'ant_alergicos.min'          => 'El campo Antecedentes alérgicos debe de contener más de 2 letras.',
            'ant_alergicos.max'          => 'El campo Antecedentes alérgicos debe de contener menos de 250 letras.',
            'ant_traumaticos.required'   => 'Debe de llenar el campo Antecedentes traumáticos',
            'ant_traumaticos.min'        => 'El campo Antecedentes traumáticos debe de contener más de 2 letras.',
            'ant_traumaticos.max'        => 'El campo Antecedentes traumáticos debe de contener menos de 250 letras.',  
            'ant_familiares.required'    => 'Debe de llenar el campo Antecedentes familiares',
            'ant_familiares.min'         => 'El campo Antecedentes familiares debe de contener más de 2 letras.',
            'ant_familiares.max'         => 'El campo Antecedentes familiares debe de contener menos de 250 letras.',
            'temp_oral.required'         => 'Debe de llenar el campo Temperatura oral',
            'temp_oral.min'              => 'El campo Temperatura oral debe de contener más de 2 letras.',
            'temp_oral.max'              => 'El campo Temperatura oral debe de contener menos de 250 letras.',
            'pr_arterial.required'       => 'Debe de llenar el campo Presión arterial',
            'pr_arterial.min'            => 'El campo Presión arterial  debe de contener más de 2 letras.',
            'pr_arterial.max'            => 'El campo Presión arterial  debe de contener menos de 250 letras.',
            'fr_cardiaca.required'       => 'Debe de llenar el campo Frecuencia cardíaca ',
            'fr_cardiaca.min'            => 'El campo Frecuencia cardíaca debe de contener más de 2 letras.',
            'fr_cardiaca.max'            => 'El campo Frecuencia cardíaca debe de contener menos de 250 letras.',
            'fr_respiratoria.required'   => 'Debe de llenar el campo Frecuencia respiratoria ',
            'fr_respiratoria.min'        => 'El campo Frecuencia respiratoria debe de contener más de 2 letras.',
            'fr_respiratoria.max'        => 'El campo Frecuencia respiratoria debe de contener menos de 250 letras.',
            'peso.required'              => 'Debe de llenar el campo Peso ',
            'peso.min'                   => 'El campo Peso debe de contener más de 2 letras.',
            'peso.max'                   => 'El campo Peso debe de contener menos de 250 letras.',
            'talla.required'              => 'Debe de llenar el campo Talla ',
            'talla.min'                   => 'El campo Talla debe de contener más de 2 letras.',
            'talla.max'                   => 'El campo Talla debe de contener menos de 250 letras.'
            

            

        ];
    }
}
