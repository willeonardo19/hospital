<?php

namespace hospital\Http\Controllers;
use hospital\Examen;
use Illuminate\Http\Request;
use App\Http\Requests;
use hospital\Http\Requests\ExamenRequest;
use Laracasts\Flash\Flash;
use DB;
use Carbon\Carbon;
class ExamenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset($_GET['id_ex'])){
            //dd($_GET['id_ex']);
            $examen= Examen::find($_GET['id_ex']);
            return view('admin.examen.index')->with('examen',$examen);
        }else{

        }
        $examenes= Examen::orderby('examen','asc')->paginate(10);
        return view('admin.examen.index')->with('examenes',$examenes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.examen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExamenRequest $request)
    {
        try {
            $examen = new Examen;
            DB::beginTransaction();
            $examen->examen   = $request->input('examen');
            if($examen->save()){
                DB::commit();
                Flash::success($examen->examen.' registrado con éxito');
            }
        } catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e); 
       }
       return redirect('admin/examen');
        
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
    public function update(ExamenRequest $request, $id)
    {
        
        try {
            $examen = Examen::find($id);
            DB::beginTransaction();
            $examen->fill([
            $examen->examen   = $request->input('examen')
            
            ]);
            if($examen->save()){
                DB::commit();
                Flash::success('Modificación realizada con éxito');  

            }

         } catch (Exception $e) {
             DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e); 
         }
         return redirect('admin/examen');
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
                $record = Examen::find($id);
                
                if($record->delete()){
                    DB::commit();
                    Flash::success('Eliminación realizada con éxito');   
                }
            });
        } catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e);  
        } 
        return redirect('admin/examen');
    }
}
