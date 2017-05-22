<?php

namespace hospital\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
            'cod_paciente'      =>      'max:10|required',
            'dpi'               =>      'min:13|max:13',
            'nombre'            =>      'min:3|max:250|required',
            'apellido'          =>      'min:3|max:250|required',
            'telefono'          =>      'min:8|max:12',
            'fechna'            =>      'before:tomorrow',
            'sexo'              =>      'required',
            'est_civ'           =>      'required',
            'religion'          =>      'required',
            'ocupacion'         =>      'min:6|max:200|required',
            'direccion'         =>      'min:6|max:200|required',
            'contacemer'        =>      'min:6|max:250|required',
            'contacttel'        =>      'min:8|max:12'
        ];
    }
    public function messages(){
        return [
            'cod_paciente.required' => 'Debe de ingresar el Código de Paciente.',
            'cod_paciente.max'      => 'El Código de Paciente no debe de contener más de 5 digítos.',
            'dpi.min'               => 'El DPI debe de contener 13 digítos.',
            'dpi.max'               => 'El DPI debe de contener 13 digítos.',
            'nombre.min'            => 'El nombre del paciente debe de contener más de 3 letras.',
            'nombre.max'            => 'El nombre del paciente debe de contener menos de 250 letras.',
            'nombre.required'       => 'Debe de ingresar un nombre de paciente.',
            'apellido.min'          => 'El apellido del paciente debe de contener más de 3 letras.',
            'apellido.max'          => 'El apellido del paciente debe de contener menos de 250 letras.',
            'apellido.required'     => 'Debe de ingresar un apellido de paciente.',
            'telefono.min'          =>  'El número de teléfono debe de contener 8 números',
            'telefono.max'          =>  'El número de teléfono debe de contener menos de 12 números',  
            'fechna.before'         =>  'Fecha de nacimiento no válida.',
            'sexo.required'         =>  'Seleccione genero del paciente',
            'est_civ.required'      =>  'Seleccione estado civil del paciente',
            'religion.required'     =>  'Seleccione religión del paciente',
            'ocupacion.required'    =>  'Debe de ingresar la ocupación del paciente',
            'ocupacion.min'         =>  'La ocupación del paciente debe de contener mas de 6 letras',
            'ocupacion.max'         =>  'La ocupación del paciente debe de contener menos  de 250 letras',
            'direccion.required'    =>  'Debe de ingresar la dirección del paciente',
            'direccion.min'         =>  'La dirección del paciente debe de contener mas de 6 letras',
            'direccion.max'         =>  'La dirección del paciente debe de contener menos  de 250 letras',
            'contacemer.required'   =>  'Debe de ingresar el contacto de emergencia del paciente',
            'contacemer.min'        =>  'El contacto de emergencia del paciente debe de contener mas de 6 letras',
            'contacemer.max'        =>  'El contacto de emergencia del paciente debe de contener menos  de 250 letras',
            'contacttel.min'        =>  'El número de teléfono del contacto de emergencia debe de contener 8 números',
            'contacttel.max'        =>  'El número de teléfono del contacto de emergencia debe de contener menos de 12 números'
         

        ];
    }
}
