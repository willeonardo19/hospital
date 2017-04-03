<?php

namespace hospital\Http\Controllers;

use Illuminate\Http\Request;
use hospital\Personal;
use Laracasts\Flash\Flash;
use DB;
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $personal = Personal::search($request->buscar)->orderBy('id','ASC')->paginate(10);
        return view('admin.personal.index')->with('personal',$personal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Personal;
       
       $this->validate($request,array(
                'nombre'            =>      'min:3|max:250|required',
                'apellido'          =>      'min:3|max:250|required',
                'telefono'          =>      'max:12',
                'direccion'         =>      'min:6|required',
                'fechna'            =>      'before:tomorrow',
                'dpi'               =>      'max:30',
                'contacemer'        =>      'min:6|max:250|required',
                'contacttel'        =>      'max:12'//dimensions:min_width=45,min_height=45'
                
                ));
          try {
                DB::beginTransaction();

                $persona->nombre            = $request->input('nombre');
                $persona->apellido          = $request->input('apellido');
                $persona->telefono          = $request->input('telefono');
                $persona->direccion         = $request->input('direccion');
                $persona->dpi               = $request->input('dpi');
                $persona->fechna            = $request->input('fechna');
                $persona->contacemer        = $request->input('contacemer');
                $persona->contacttel        = $request->input('contactel');
                
                
                if($persona->save()){
                    DB::commit();
                    //Log::info('Se ha registrado una nueva solicitud de '.$datos_usuario->nombre.', '.$datos_usuario->apellido);
                    Flash::success($persona->nombre.' registrado con éxito');
                }
        }catch(Exception $e){
            DB::rollback();
            Flash::error($persona->nombre.' ocurrió un problema al procesar su solicitud.'.$e);  
        }
        return redirect('admin/personal');
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
        $persona = Personal::find($id);
        return view('admin.personal.edit')->with('persona',$persona);
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
        
        $this->validate($request,array(
            'nombre'            =>      'min:3|max:250|required',
            'apellido'          =>      'min:3|max:250|required',
            'telefono'          =>      'max:12',
            'direccion'         =>      'min:6|required',
            'fechna'            =>      'before:tomorrow',
            'dpi'               =>      'max:30',
            'contacemer'        =>      'min:6|max:250|required',
            'contacttel'        =>      'max:12'//dimensions:min_width=45,min_height=45'
            
            ));
        $persona = Personal::find($id);
        try {
            DB::beginTransaction();
            $persona->nombre            = $request->input('nombre');
            $persona->apellido          = $request->input('apellido');
            $persona->telefono          = $request->input('telefono');
            $persona->direccion         = $request->input('direccion');
            $persona->dpi               = $request->input('dpi');
            $persona->fechna            = $request->input('fechna');
            $persona->contacemer        = $request->input('contacemer');
            $persona->contacttel        = $request->input('contactel');

            if($persona->save() ) {
                DB::commit();
                Flash::success('Modificación realizada con éxito');      
                
            }

        } catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e);  
        }
        return redirect('admin/personal');

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
                $record = Personal::find($id);
                
                if($record->delete()){
                    DB::commit();
                    Flash::success('Eliminación realizada con éxito');   
                }
            });
        } catch (Exception $e) {
            DB::rollback();
            Flash::error('Ocurrió un problema al procesar su solicitud.'.$e);  
        } 
        return redirect('admin/personal');
    }
}
