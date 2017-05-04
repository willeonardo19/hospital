<?php

namespace hospital\Http\Controllers;

use Illuminate\Http\Request;
use hospital\Consulta;
use hospital\Paciente;
use hospital\User;
use Laracasts\Flash\Flash;
use DB;
use Auth;
use Carbon\Carbon;
class ConsultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Esta funcion genera una consulta y devuelve el index para mostar todas las consultas solicitadas del día
    public function index()
    {
        //$consultas = Consulta::orderBy('estado','ASC')->paginate(10);
        $consultas = Consulta::orderBy('estado', 'ASC')->orderBy('id', 'ASC')->where('created_at','like' ,date("Y-m-d").'%')->paginate(10);
        $consultas->each(function($consultas){
            $consultas->paciente;
            //$consultas->usuario;
        });
        $pacientes = Paciente::select(DB::raw("CONCAT(nombre,' ',apellido,' --- ',dpi,'  ---   ',fech_na) AS nombre"),'id')->pluck('nombre', 'id');
       //dd($consultas);
        return view('admin.consulta.index')->with('consultas',$consultas)->with('pacientes',$pacientes);
    }

    //Vista para todas las consultas registradas, tanto del dia, como de dias anteriores
    public function historial_consultas()
    {
        //$consultas = Consulta::orderBy('estado','ASC')->paginate(10);
        $consultas = Consulta::orderBy('created_at','ASC')->paginate(10);
        $consultas->each(function($consultas){
            $consultas->paciente;
            $consultas->usuario;
        });

       //dd($consultas);
        return view('admin.consulta.historialConsultas')->with('consultas',$consultas);
    }
    //vista para las consultas en estado solicitadas, la enfermera debera generar la preconsulta.
    public function pre_consulta()
    {
        $consultas = Consulta::orderBy('estado','ASC')->where('created_at','like' ,date("Y-m-d").'%')->where('estado','=' ,'solicitada')->paginate(10);
        $consultas->each(function($consultas){
            $consultas->paciente;
            //$consultas->usuario;
        });
        
       //dd($consultas);
        return view('admin.consulta.consultassolicitadas')->with('consultas',$consultas);
    }
    //Vista para las consultas en estado de proceso, las cuales ya cuentan con una preconsulta, listas para ser atendidas por el medico
    public function consulta_medica()
    {
        $consultas = Consulta::orderBy('estado','ASC')->where('created_at','like' ,date("Y-m-d").'%')->where('estado','=' ,'proceso')->paginate(10);
        $consultas->each(function($consultas){
            $consultas->paciente;
            //$consultas->usuario;
        });
        
       //dd($consultas);
        return view('admin.consulta.consultasenproceso')->with('consultas',$consultas);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *///Esta funcion no se utiliza, unicamente redirecciono al index
    public function create()
    {
       /* $pacientes = Paciente::select(DB::raw("CONCAT(nombre,' ',apellido,' --- ',dpi,'  ---   ',fech_na) AS nombre"),'id')->pluck('nombre', 'id');
        /*$users =DB::select('select u.id,concat(p.nombre,p.apellido) as nombre
        from users as u
        inner join personal as p on p.id=u.personal_id
        where type= "doctor"');

        $users=DB::select('Call Doctores();');
        $users= array_pluck($users,'nombre','id');
        return view('admin.consulta.create')->with('pacientes',$pacientes)->with('users',$users);
        //dd($users);
*/
        return redirect('admin/consultas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
                'paciente'      =>      'required'
                //'personal'      =>      'required'
                ));
        
        try {
            $consulta = new Consulta;
            DB::beginTransaction();
            $consulta->paciente_id          = $request->input('paciente');
            //$consulta->usuario_id          = $request->input('personal');
            if($consulta->save()){
                DB::commit();
                //Log::info('Se ha registrado una nueva solicitud de '.$datos_usuario->nombre.', '.$datos_usuario->apellido);
                Flash::success('Consulta registrado con éxito');
            }
            
        } catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e); 
       }
       return redirect('admin/consultas');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *///En esta funcion actualizara la connsulta al estado en proceso y actualizara el id del usuario, en la tabla consulta
    public function show($id)
    {
        $consulta_id=$_GET['consulta_id'];
        $paciente = Paciente::find($id);
        $edad = Carbon::createFromDate(
            date('Y',strtotime($paciente->fech_na)),
            date('m',strtotime($paciente->fech_na)),
            date('d',strtotime($paciente->fech_na)))->age;

        $fecha = Carbon::createFromDate(
            date('Y',strtotime($paciente->fech_na)),
            date('m',strtotime($paciente->fech_na)),
            date('d',strtotime($paciente->fech_na)))
            ->format('d - m - Y');
        
       //dd($paciente2);
       return view('admin.consulta.consulta')->with('paciente',$paciente)->with('edad',$edad)->with('fecha',$fecha)->with('consulta_id',$consulta_id);
    }
    ///esta funcion retorna la informacion del paciente y  las preconsultas del paciente seleccionado
    public function registro_preconsulta($id)
    {

       //;
        $consulta_id=$_GET['consulta'];
        $paciente = Paciente::find($id);
        $edad = Carbon::createFromDate(
            date('Y',strtotime($paciente->fech_na)),
            date('m',strtotime($paciente->fech_na)),
            date('d',strtotime($paciente->fech_na)))->age;

        $fecha = Carbon::createFromDate(
            date('Y',strtotime($paciente->fech_na)),
            date('m',strtotime($paciente->fech_na)),
            date('d',strtotime($paciente->fech_na)))
            ->format('d - m - Y');
        
       //dd($paciente2);
       return view('admin.consulta.preconsulta')->with('paciente',$paciente)->with('edad',$edad)->with('fecha',$fecha)->with('consulta_id',$consulta_id);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *///Esta funcion no  se utiliza, solo redirecciona al index
    public function edit($id)
    {
        /*
        $consulta = Consulta::find($id);
        $pacientes = Paciente::select(DB::raw("CONCAT(nombre,' ',apellido,' --- ',dpi,'  ---   ',fech_na) AS nombre"),'id')->pluck('nombre', 'id');
        $users=DB::select('Call Doctores();');
        $users= array_pluck($users,'nombre','id');
        return view('admin.consulta.edit')->with('pacientes',$pacientes)->with('users',$users)->with('consulta',$consulta);*/
        return redirect('admin/consultas');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *///Esta funcion no se utiliza, solo redirecciona al index
    public function update(Request $request, $id)
    {/*
       $this->validate($request,array(
                'paciente'      =>      'required',
                'personal'      =>      'required'
                ));
        try {
            $consulta = Consulta::find($id);
            DB::beginTransaction();
            $consulta->fill([
            $consulta->paciente_id           = $request->input('paciente'),
            $consulta->usuario_id            = $request->input('personal'),
            $consulta->estado                = $request->input('estado')
            ]);

            if($consulta->save()){
                DB::commit();
                Flash::success('Modificación realizada con éxito');  

            }
            
        } catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e); 
        }*/
        return redirect('admin/consultas');


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
                $record = Consulta::find($id);
                
                if($record->delete()){
                    DB::commit();
                    Flash::success('Eliminación realizada con éxito');   
                }
            });
        } catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e);  
        } 
        return redirect('admin/consultas');
    }
    
}
