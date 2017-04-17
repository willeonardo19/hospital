<?php

namespace hospital\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Input;
use hospital\Personal;
use Laracasts\Flash\Flash;

class ExcelController extends Controller
{
    public function ExportarPersonal()
    {
    	Excel::create('Personal',function($excel){
    		$excel->sheet('Personal',function($sheet){
    			$sheet->loadView('admin.excel.ExportarPersonal');
    		});
    	})->export('xlsx');
    }
    public function ExportarUsuarios()
    {
    	Excel::create('Usuarios',function($excel){
    		$excel->sheet('Usuarios',function($sheet){
    			$sheet->loadView('admin.excel.ExportarPersonal');
    		});
    	})->export('xlsx');
    }
    public function ExportarPacientes()
    {
    	Excel::create('Pacientes',function($excel){
    		$excel->sheet('Pacientes',function($sheet){
    			$sheet->loadView('admin.excel.ExportarPersonal');
    		});
    	})->export('xlsx');
    }

    public function ImportarPersonal()
    {	
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
    	
    	return redirect('admin/personal');
    }
    public function ImportarUsuarios()
    {   
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
        
        return redirect('admin/usuarios');
    }
    public function ImportarPacientes()
    {   
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
        
        return redirect('admin/pacientes');
    }
}
