<?php

namespace hospital\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
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
            'nombre'            =>      'min:3|max:250|required',
            'apellido'          =>      'min:3|max:250|required',
            'telefono'          =>      'min:8|max:12',
            'direccion'         =>      'min:6|required',
            'fechna'            =>      'before:tomorrow',
            'sexo'              =>      'required',
            'dpi'               =>      'max:30',
            'contacemer'        =>      'min:6|max:250|required',
            'contacttel'        =>      'max:12'//dimensions:min_width=45,min_height=45'
        ];
    }
    public function messages(){
        return [
            'nombre.required'    => 'Debe de llenar el campo Nombre del personal ',
            'nombre.min'         => 'El campo Nombre del personal debe de contener más de 3 letras.',
            'nombre.max'         => 'El campo Nombre del personal debe de contener menos de 250 letras.',
            'apellido.required'  => 'Debe de llenar el campo Apellido del personal ',
            'apellido.min'       => 'El campo Apellido del personal debe de contener más de 3 letras.',
            'apellido.max'       => 'El campo Apellido del personal debe de contener menos de 250 letras.',
            'telefono.min'       => 'El campo Teléfono del personal debe ser de 8 números.',
            'telefono.max'       => 'El campo Teléfono del personal no debe ser de más de 12 números.',
            'fecha.before'       => 'La fecha ingresada no es válida.',
            'sexo.required'      => 'Debe de seleccionar el sexo del personal.',
            'dpi.required'       => 'Debe de ingresar el CUI.',
            'dpi.min'            => 'El CUI debe de contener 13 dígitos.',
            'dpi.max'            => 'El CUI debe de contener 13 dígitos.',
            'contacemer.required'=> 'Debe de ingresar el Nombre del Contacto de Emergencia.',
            'contacemer.min'     => 'El Nombre del Contacto de Emergencia  debe de contener más de 6 letras.',
            'contacemer.max'     => 'El Nombre del Contacto de Emergencia no debe de contener más de 250 letras.',
            'contacttel.min'     => 'El campo Teléfono del personal debe ser de 8 números.',
            'contacttel.max'     => 'El campo Teléfono del personal no debe ser de más de 12 números.'

            

        ];
    }
}
