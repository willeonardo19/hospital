<?php

namespace hospital\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Input;
use hospital\Personal;
use hospital\User;
use hospital\Paciente;
use Laracasts\Flash\Flash;

class ExcelController extends Controller
{
    //Exportar excel
    public function ExportarPersonal()
    {
    	Excel::create('Personal',function($excel){
    		$excel->sheet('Personal',function($sheet){
                $personal= Personal::all();
    			$sheet->loadView('admin.excel.ExportarPersonal')->with('personal',$personal);
    		});
    	})->export('xlsx');
    }
    public function ExportarUsuarios()
    {
    	Excel::create('Usuarios',function($excel){
    		$excel->sheet('Usuarios',function($sheet){
                $usuarios = User::all();
    			$sheet->loadView('admin.excel.ExportarUsuarios')->with('usuarios',$usuarios);
    		});
    	})->export('xlsx');
    }
    public function ExportarPacientes()
    {
    	Excel::create('Pacientes',function($excel){
    		$excel->sheet('Pacientes',function($sheet){
                 $pacientes = Paciente::all();
    			$sheet->loadView('admin.excel.ExportarPacientes')->with('pacientes',$pacientes);
    		});
    	})->export('xlsx');
    }
    //Importar Excel
    public function ImportarPersonal()
    {	
    	if(Input::file('file')!=null){
            try {
        		Excel::load(Input::file('file'),function($reader){
    	    		$reader->each(function($sheet){
    	    			//foreach($sheet->toArray() as $row){
    	    				Personal::firstOrCreate($sheet->toArray());
    	    			//}
    	    		});
    	    	});
    	    	Flash::success('Registros creados con éxito');
        	} catch (Exception $e) {
        		Flash::error('Ocurrió un problema al procesar su solicitud.'.$e); 
        	}
    	}else{
            Flash::error('Debe de seleccionar un archivo para importar'); 
        }
    	return redirect('admin/personal');
    }
    public function ImportarUsuarios()
    {   
        if(Input::file('file')!=null){
            try {
                Excel::load(Input::file('file'),function($reader){
                    $reader->each(function($sheet){
                        //foreach($sheet->toArray() as $row){
                            User::firstOrCreate($sheet->toArray());
                        //}
                    });
                });
                Flash::success('Registros creados con éxito');
            } catch (Exception $e) {
                Flash::error('Ocurrió un problema al procesar su solicitud.'.$e); 
            }
        }else{
            Flash::error('Debe de seleccionar un archivo para importar'); 
        }
        
        return redirect('admin/usuarios');
    }
    public function ImportarPacientes()
    {   
        if(Input::file('file')!=null){
            try {
                Excel::load(Input::file('file'),function($reader){
                    $reader->each(function($sheet){
                        //foreach($sheet->toArray() as $row){
                            Paciente::firstOrCreate($sheet->toArray());
                        //}
                    });
                });
                Flash::success('Registros creados con éxito');
            } catch (Exception $e) {
                Flash::error('Ocurrió un problema al procesar su solicitud.'.$e); 
            }
        }else{
            Flash::error('Debe de seleccionar un archivo para importar'); 
        }
        
        return redirect('admin/pacientes');
    }
}
