<?php

namespace hospital\Http\Controllers;

use Illuminate\Http\Request;
use hospital\Preconsulta;
use hospital\Consulta;
use Laracasts\Flash\Flash;
use DB;
use Auth;
use Carbon\Carbon;
class PreconsultasController extends Controller
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
        //
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
                'est_conciencia'       =>      'min:1|max:250|required',
                'ant_medicos'          =>      'min:1|max:250|required',
                'ant_quirurgicos'      =>      'min:1|max:250|required',
                'ant_alergicos'        =>      'min:1|max:250|required',
                'ant_traumaticos'      =>      'min:1|max:250|required',
                'ant_familiares'       =>      'min:1|max:250|required',
                'temp_oral'            =>      'min:1|max:250|required',
                'pr_arterial'          =>      'min:1|max:250|required',
                'fr_cardiaca'          =>      'min:1|max:250|required',
                'fr_respiratoria'      =>      'min:1|max:250|required',
                'peso'                 =>      'min:1|max:250|required',
                'talla'                =>      'min:1|max:250|required'
               
                ));
          try { 
                $preconsulta = new Preconsulta;
                DB::beginTransaction();

                $preconsulta->paciente_id         = $request->input('paciente_id');
                $preconsulta->usuario_id          =  Auth::user()->id;
                $preconsulta->est_conciencia      = $request->input('est_conciencia');
                $preconsulta->ant_medicos         = $request->input('ant_medicos');
                $preconsulta->ant_quirurgicos     = $request->input('ant_quirurgicos');
                $preconsulta->ant_alergicos       = $request->input('ant_alergicos');
                $preconsulta->ant_traumaticos     = $request->input('ant_traumaticos');
                $preconsulta->ant_familiares      = $request->input('ant_familiares');
                $preconsulta->temp_oral           = $request->input('temp_oral');
                $preconsulta->pr_arterial         = $request->input('pr_arterial');
                $preconsulta->fr_cardiaca         = $request->input('fr_cardiaca');
                $preconsulta->fr_respiratoria     = $request->input('fr_respiratoria');
                $preconsulta->peso                = $request->input('peso');
                $preconsulta->talla               = $request->input('talla');
                $preconsulta->au                  = $request->input('au');
                $preconsulta->fcf                 = $request->input('fcf');

                if($preconsulta->save()){
                    /////////////////////////
                    try {
                        $preco = DB::table('preconsulta')->where('usuario_id','=',Auth::user()->id)->where('paciente_id','=',$request->input('paciente_id'))->where('created_at','like','%'.date('Y-m-d').'%')->first();
                        
                        $consulta = Consulta::find($request->input('consulta_id'));
                        DB::beginTransaction();
                        $consulta->fill([
                        $consulta->paciente_id           = $request->input('paciente_id'),
                        $consulta->preconsulta_id        = $preco->id,
                        $consulta->estado                = 'proceso'
                        ]);

                        if($consulta->save()){
                            DB::commit();
                            Flash::success('Modificación de estado realizada con éxito');  

                        }
            
                        } catch (Exception $e) {
                            DB::rollback();
                            Flash::error('Ocurrió un problema al procesar su el cambio de estado de preconsulta.'.$e); 
                        }

                    ///////////////////
                    DB::commit();
                    //Log::info('Se ha registrado una nueva solicitud de '.$datos_usuario->nombre.', '.$datos_usuario->apellido);
                    Flash::success('Preconsulta  registrada con éxito');


                }
        }catch(Exception $e){
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e);  
        }


        return redirect('admin/preconsulta');

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
