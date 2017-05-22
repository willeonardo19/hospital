<?php

namespace hospital\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use hospital\Http\Requests\UsuarioRequest;
use hospital\User;
use hospital\Personal;
use Laracasts\Flash\Flash;
use DB;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::search($request->buscar)->orderBy('type','ASC')->paginate(10);
        $users->each(function($users){
            $users->personal;
            
        });
        return view('admin.usuarios.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     //$tipos = user::orderBy('type','ASC')->pluck('type','id');

        $tipos=[
            'admin'             => "LeoSoft",
            'administracion'    => "Administrador",
            'laboratorio'       => "Laboratorio",
            'doctor'            => "Doctor",
            'enfermera'         => "Enfermera",
            'secretaria'        => "Secretaria",
            'member'            => "Usuario",
        ];
        $personal = Personal::select(DB::raw("CONCAT(nombre,' ',apellido) AS nombre"),'id')->pluck('nombre', 'id');
        //dd($personal);
        return view('admin.usuarios.create')->with('personal',$personal)->with('tipos',$tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
       try {
            $usuario = new User;
            DB::beginTransaction();
            $usuario->user            = $request->input('user');
            $usuario->email           = $request->input('email');
            $usuario->password         = bcrypt($request->input('password'));
            $usuario->type            = $request->input('rol');
            $usuario->personal_id     = $request->input('idpersonal');
            if($usuario->save()){
                    DB::commit();
                    //Log::info('Se ha registrado una nueva solicitud de '.$datos_usuario->nombre.', '.$datos_usuario->apellido);
                    Flash::success($usuario->user.' registrado con éxito');
                }
           
       } catch (Exception $e) {
            DB::rollback();
            Flash::error($usuario->user.' ocurrió un problema al procesar su solicitud.'.$e);
       }
       return redirect('admin/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
         $tipos=[
            'admin'             => "LeoSoft",
            'administracion'    => "Administrador",
            'laboratorio'       => "Laboratorio",
            'doctor'            => "Doctor",
            'enfermera'         => "Enfermera",
            'secretaria'        => "Secretaria",
            'member'            => "Usuario",
        ];
        $personal = Personal::select(DB::raw("CONCAT(nombre,' ',apellido) AS nombre"),'id')->pluck('nombre', 'id');
        return view('admin.usuarios.edit')
        ->with('user',$user)
        ->with('tipos',$tipos)
        ->with('personal',$personal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioRequest $request, $id)
    {
        try {
            $user = User::find($id);
            DB::beginTransaction();

            /*
            $user->user                 = $request->input('user');
            $user->email                = $request->input('email');
            $user->password             = bcrypt($request->input('password'));
            $user->type                 = $request->input('rol');
            $user->personal_id          = $request->input('idpersonal');*/
            $user->fill([
            $user->user                 = $request->input('user'),
            $user->email                = $request->input('email'),
            $user->password             = bcrypt($request->input('password')),
            $user->type                 = $request->input('rol'),
            $user->personal_id          = $request->input('idpersonal'),

                ]);

            if($user->save()){
                DB::commit();
                Flash::success('Modificación realizada con éxito');  

            }
            
        } catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e);  
        }
        return redirect('admin/usuarios');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::transaction(function() use ($id) {   
                $record = User::find($id);
                
                if($record->delete()){
                    DB::commit();
                    Flash::success('Eliminación realizada con éxito');   
                }
            });
        } catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e);  
        } 
        return redirect('admin/usuarios');
    }
}
