<?php

namespace hospital\Http\Controllers;

use Illuminate\Http\Request;
use hospital\Paciente;
use Laracasts\Flash\Flash;
use DB;
use Carbon\Carbon;
class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pacientes = Paciente::search($request->buscar)->orderBy('id','ASC')->paginate(10);
        return view('admin.pacientes.index')->with('pacientes',$pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
       
       
       $this->validate($request,array(
                'cod_paciente'      =>      'max:250|required',
                'dpi'               =>      'max:250',
                'nombre'            =>      'min:3|max:250|required',
                'apellido'          =>      'min:3|max:250|required',
                'telefono'          =>      'max:12',
                'fechna'            =>      'before:tomorrow',
                'sexo'              =>      'required',
                'est_civ'           =>      'required',
                'ocupacion'         =>      'min:6|max:200|required',
                'direccion'         =>      'min:6|max:200|required',
                'contacemer'        =>      'min:6|max:250|required',
                'contacttel'        =>      'max:12'
                ));
       try { 
            $paciente = new Paciente;
            DB::beginTransaction();
            $paciente->cod_pac          = $request->input('cod_paciente');
            $paciente->dpi              = $request->input('dpi');
            $paciente->nombre           = $request->input('nombre');
            $paciente->apellido         = $request->input('apellido');
            $paciente->telefono         = $request->input('telefono');
            $paciente->fech_na          = $request->input('fechna');
            $paciente->sexo             = $request->input('sexo');
            $paciente->est_civ          = $request->input('est_civ');
            $paciente->ocupacion        = $request->input('ocupacion');
            $paciente->direccion        = $request->input('direccion');
            $paciente->contacemer       = $request->input('contacemer');
            $paciente->contacttel       = $request->input('contactel');
            if($paciente->save()){
                    DB::commit();
                    //Log::info('Se ha registrado una nueva solicitud de '.$datos_usuario->nombre.', '.$datos_usuario->apellido);
                    Flash::success($paciente->nombre.' registrado con éxito');
                }
           
       } catch (Exception $e) {
           DB::rollback();
            Flash::error($persona->nombre.' ocurrió un problema al procesar su solicitud.'.$e); 
       }
       return redirect('admin/pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        
       //dd($fecha);
       return view('admin.pacientes.show')->with('paciente',$paciente)->with('edad',$edad)->with('fecha',$fecha);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        return view('admin.pacientes.edit')->with('paciente',$paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request);
         $this->validate($request,array(
                'cod_paciente'      =>      'max:250|required',
                'dpi'               =>      'max:250',
                'nombre'            =>      'min:3|max:250|required',
                'apellido'          =>      'min:3|max:250|required',
                'telefono'          =>      'max:12',
                'fechna'            =>      'before:tomorrow',
                'sexo'              =>      'required',
                'est_civ'           =>      'required',
                'ocupacion'         =>      'min:6|max:200|required',
                'direccion'         =>      'min:6|max:200|required',
                'contacemer'        =>      'min:6|max:250|required',
                'contacttel'        =>      'max:12'
                ));
         
         try {
            $paciente = Paciente::find($id);
            DB::beginTransaction();
            $paciente->fill([
            $paciente->cod_pac           = $request->input('cod_paciente'),
            $paciente->dpi               = $request->input('dpi'),
            $paciente->nombre            = $request->input('nombre'),
            $paciente->apellido          = $request->input('apellido'),
            $paciente->telefono          = $request->input('telefono'),
            $paciente->fech_na           = $request->input('fechna'),
            $paciente->sexo              = $request->input('sexo'),
            $paciente->est_civ           = $request->input('est_civ'),
            $paciente->ocupacion         = $request->input('ocupacion'),
            $paciente->direccion         = $request->input('direccion'),
            $paciente->contacemer        = $request->input('contacemer'),
            $paciente->contacttel        = $request->input('contactel')
                ]);

            if($paciente->save()){
                DB::commit();
                Flash::success('Modificación realizada con éxito');  

            }

         } catch (Exception $e) {
             DB::rollback();
            Flash::error($persona->nombre.' ocurrió un problema al procesar su solicitud.'.$e); 
         }
         return redirect('admin/pacientes');
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
                $record = Paciente::find($id);
                
                if($record->delete()){
                    DB::commit();
                    Flash::success('Eliminación realizada con éxito');   
                }
            });
        } catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e);  
        } 
        return redirect('admin/pacientes');
    }
}
