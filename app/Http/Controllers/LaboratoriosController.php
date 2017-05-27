<?php

namespace hospital\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use hospital\Examen;
use hospital\Paciente;
use hospital\Laboratorio;
use hospital\Http\Requests\LaboratorioRequest;
use Laracasts\Flash\Flash;
use DB;
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\Storage;
class LaboratoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorios= Laboratorio::orderby('created_at','desc')->paginate(10);
        $laboratorios->each(function($laboratorios){
            $laboratorios->paciente;
            $laboratorios->examen;
            
        });
        return view('admin.laboratorio.index')
        ->with('laboratorios',$laboratorios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $examenes=Examen::select('examen','id')->pluck('examen','id');
        $pacientes=Paciente::select(DB::raw("CONCAT(nombre,' ',apellido,' --- ',dpi,'  ---   ',fech_na) AS nombre"),'id')->pluck('nombre', 'id');
        return view('admin.laboratorio.create')
        ->with('examenes',$examenes)
        ->with('pacientes',$pacientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaboratorioRequest $request)
    {
        try {
            $paciente   =   Paciente::find($request->paciente_id);
            $examen     =   Examen::find($request->examen_id);
            $laboratorio = new Laboratorio;
            DB::beginTransaction();
            $file = $request->file('pdf_file');
            $name = $paciente->cod_pac.'_'.time().'.'.$file->getClientOriginalExtension();
            $laboratorio->paciente_id   = $request->input('paciente_id');
            $laboratorio->examen_id     = $request->input('examen_id');
            $laboratorio->resultado     = $name;
            if($laboratorio->save()){
                DB::commit();
                
                //$path = public_path().'/pdf_exam/';
                $file->move('pdf_exam',$name);
                Flash::success('Exámen cargado con éxito');
            }

        }catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e); 
       }
       return redirect('admin/laboratorio');
       
        
        
       
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
        $examenes=Examen::select('examen','id')->pluck('examen','id');
        $pacientes=Paciente::select(DB::raw("CONCAT(nombre,' ',apellido,' --- ',dpi,'  ---   ',fech_na) AS nombre"),'id')->pluck('nombre', 'id');
        $laboratorio =  Laboratorio::find($id);
        return view('admin.laboratorio.edit')
        ->with('pacientes',$pacientes)
        ->with('examenes',$examenes)
        ->with('laboratorio',$laboratorio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LaboratorioRequest $request, $id)
    {
     try {
            $paciente   =   Paciente::find($request->paciente_id);
            $examen     =   Examen::find($request->examen_id);
            $laboratorio = Laboratorio::find($id);
             $filename = public_path().'/pdf_exam/'.$laboratorio->resultado;
            \File::delete($filename);
            DB::beginTransaction();
            $file = $request->file('pdf_file');
            $name = $paciente->cod_pac.'_'.time().'.'.$file->getClientOriginalExtension();
            $laboratorio->fill([
            $laboratorio->paciente_id   = $request->input('paciente_id'),
            $laboratorio->examen_id     = $request->input('examen_id'),
            $laboratorio->resultado     = $name
                ]);

            if($laboratorio->save()){
                DB::commit();
                $file->move('pdf_exam',$name);
                Flash::success('Modificación realizada con éxito');  

            }

         } catch (Exception $e) {
             DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e); 
         }
         return redirect('admin/laboratorio');   
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
                $record = Laboratorio::find($id);
                
                 $filename = public_path().'/pdf_exam/'.$record->resultado;
                \File::delete($filename);

                if($record->delete()){
                    DB::commit();
                    Flash::success('Eliminación realizada con éxito');   
                }
            });
        } catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e);  
        } 
        return redirect('admin/laboratorio');
    }
}
