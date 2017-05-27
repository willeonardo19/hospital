<?php

namespace hospital\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdataUsuarioRequest extends FormRequest
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
            'user'              =>      'min:3|max:250|required|unique:users,id,:id',
            'email'             =>      'min:3|max:250|required|unique:users,id,:id',
            'password'          =>      'min:6|max:20|required',
            'rol'               =>      'required',
            'idpersonal'        =>      'required'
            
        ];
    }
    public function messages(){
        return [
            'user.min'              => 'El nombre de usuario debe de contener más de 3 letras.',
            'user.max'              => 'El nombre de usuario debe de contener menos de 250 letras.',
            'user.required'         => 'Debe de ingresar un nombre de usuario.',
            'user.unique'           => 'El nombre de usuario ya se encuentra registrado, ingrese otro nombre de usuario.',
            'email.min'             => 'El correo electrónico debe de contener más de 3 letras.',
            'email.max'             => 'El correo electrónico debe de contener menos de 250 letras.',
            'email.required'        => 'Debe de ingresar un correo electrónico.',
            'email.unique'          => 'El correo electrónico ya se encuentra registrado, ingrese otro correo electrónico.',
            'password.min'          => 'La contraseña debe de contener más de 6 letras.',
            'password.max'          => 'La contraseña debe de contener menos de 250 letras.',
            'password.required'     => 'Debe de ingresar una contraseña.',
            'rol.required'          => 'Debe de seleccionar un rol.',
            'idpersonal.required'   => 'Debe de asignar el usuario al un miembro del personal.'
         

        ];
    }
}
