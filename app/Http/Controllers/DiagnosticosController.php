<?php

namespace hospital\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use hospital\Http\Requests\DiagRequest;
use hospital\Diagnostico;
use hospital\Consulta;
use Laracasts\Flash\Flash;
use DB;
use Auth;
use Carbon\Carbon;
class DiagnosticosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pre_consulta =  DB::table('preconsulta')->where('paciente_id','=',$_GET['paciente'])->where('created_at','like','%'.date('Y-m-d').'%')->first();
        return view('admin.consulta.diagnostico')
        ->with('paciente',$_GET['paciente'])
        ->with('consulta',$_GET['consulta'])
        ->with('preconsulta',$pre_consulta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DiagRequest $request)
    {
        //dd($request);
       $this->validate($request,array(
         'motivo_cons'            =>      'min:1|max:250|required',
         'hist_enfermedad'        =>      'min:1|max:250|required',
         'imp_clinica'            =>      'min:1|max:250|required',
         'tratamiento'            =>      'min:1|max:250|required'
        ));
       try {
            $diagnostico = new Diagnostico;
            DB::beginTransaction();

            $diagnostico->paciente_id         = $request->input('paciente_id');
            $diagnostico->usuario_id          =  Auth::user()->id;
            $diagnostico->motivo_cons         = $request->input('motivo_cons');
            $diagnostico->hist_enfermedad     = $request->input('hist_enfermedad');
            $diagnostico->imp_clinica         = $request->input('imp_clinica');
            $diagnostico->tratamiento         = $request->input('tratamiento');
            if($diagnostico->save()){
                //////////////
                try {
                        $diag = DB::table('diagnostico_medico')->where('usuario_id','=',Auth::user()->id)->where('paciente_id','=',$request->input('paciente_id'))->where('created_at','like','%'.date('Y-m-d').'%')->first();
                        
                        $consulta = Consulta::find($request->input('consulta_id'));
                        DB::beginTransaction();
                        $consulta->fill([
                        $consulta->paciente_id           = $request->input('paciente_id'),
                      
                        $consulta->diagnostico_med_id    = $diag->id,
                        $consulta->estado                = 'finalizada'
                        ]);

                        if($consulta->save()){
                            DB::commit();
                            Flash::success('Modificación de estado realizada con éxito');  

                        }
            
                        } catch (Exception $e) {
                            DB::rollback();
                            Flash::error('Ocurrió un problema al procesar su el cambio de estado de preconsulta.'.$e); 
                        }
                /////////////
                DB::commit();
                    //Log::info('Se ha registrado una nueva solicitud de '.$datos_usuario->nombre.', '.$datos_usuario->apellido);
                Flash::success('Consulta  registrada con éxito');

            }

       } catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e);  
       }
       return redirect('admin/consulta');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
