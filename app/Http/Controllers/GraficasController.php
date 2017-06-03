<?php

namespace hospital\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use hospital\Paciente;
use hospital\Personal;
use hospital\Consulta;
use hospital\Preconsulta;
use hospital\Diagnostico;
use hospital\Laboratorio;
use hospital\User;
use Charts;

class GraficasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $chart = Charts::database(User::all(), 'pie', 'highcharts')
      ->elementLabel("Total")
      ->dimensions(1000, 500)
      ->responsive(true)
      ->groupBy('type');

        return view('admin.graficas.test', ['chart' => $chart]);
    }
    

    public function estadisticapaciente(Request $request)
    {

        if($request->paciente=='genero'){
            $chart = Charts::database(Paciente::all(), 'pie', 'highcharts')
            ->title('Género de Pacientes')
          ->elementLabel("Total de Pacientes")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupBy('sexo',null,['masculino'=>'Masculino','femenino'=>'Femenino']);
        }else if($request->paciente=='religion'){
            $chart = Charts::database(Paciente::all(), 'pie', 'highcharts')
            ->title('Religión de Pacientes ')
          ->elementLabel("Total de pacientes")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupBy('religion',null,['catolica'=>'Católica','cristiana'=>'Cristiana']);
        }
        else if($request->paciente=='est_civ'){
            $chart = Charts::database(Paciente::all(), 'pie', 'highcharts')
            ->title('Estado Civil de Pacientes ')
          ->elementLabel("Total de pacientes")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupBy('est_civ',null,['soltero'=>'Soltero','casado'=>'Casado','divorciado'=>'Divorciado','viudo'=>'Viudo','union'=>'Unión Libre']);
        }
        else if($request->paciente=='ocupacion'){
            $chart = Charts::database(Paciente::all(), 'pie', 'highcharts')
            ->title('Ocupación de Pacientes ')
          ->elementLabel("Total de pacientes")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupBy('ocupacion');
        }
        else{
            $chart = Charts::database(Paciente::all(), 'pie', 'highcharts')
            ->title('Género de Paciente')
          ->elementLabel("Total de pacientes")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupBy('sexo',null,['masculino'=>'Masculino','femenino'=>'Femenino']);
        }


        return view('admin.graficas.pacientes', ['chart' => $chart]);
    }

     public function estadisticapersonal(Request $request)
    {
        if($request->personal=='genero'){
            $chart = Charts::database(Personal::all(), 'pie', 'highcharts')
            ->title('Género de Personal')
          ->elementLabel("Total de Personal")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupBy('sexo',null,['masculino'=>'Masculino','femenino'=>'Femenino']);
        }else if($request->personal=='rol'){
            $chart = Charts::database(User::all(), 'pie', 'highcharts')
            ->title('Roles de Personal')
          ->elementLabel("Total de Personal")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupBy('type',null,['admin'=>'Leosoft','administracion'=>'Administración','doctor'=>'Doctor','enfermera'=>'Enfermera','laboratorio'=>'Laboratorio','secretaria'=>'Secretaria']);
        }else{
             $chart = Charts::database(Personal::all(), 'pie', 'highcharts')
            ->title('Género de Personal')
          ->elementLabel("Total de Personal")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupBy('sexo',null,['masculino'=>'Masculino','femenino'=>'Femenino']);
        }
        return view('admin.graficas.personal', ['chart' => $chart]);
    }

    public function estadisticaconsulta(Request $request)
    {
        if($request->consulta=='medico'){
            $chart = Charts::database(Diagnostico::all(), 'bar', 'highcharts')
            ->title('Médicos')
          ->elementLabel("Total de cosultas atendidas")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupBy('usuario_id','users.user');
        }else if($request->consulta=='enfermera'){
            $chart = Charts::database(Preconsulta::all(), 'bar', 'highcharts')
            ->title('Enfermeras')
          ->elementLabel("Total de consultas atendidas")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupBy('usuario_id','users.user');
        }else if($request->consulta=='dia'){
            $chart = Charts::database(Consulta::all(), 'bar', 'highcharts')
            ->dateColumn('created_at')
            ->title('Consultas por Día')
          ->elementLabel("Total de consultas atendidas")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupByDay();
        }else{
             $chart = Charts::database(Consulta::all(), 'bar', 'highcharts')
             ->dateColumn('created_at')
            ->title('Meses')
          ->elementLabel("Total de consultas atendidas")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupByMonth();
        }
        return view('admin.graficas.consulta', ['chart' => $chart]);
    }
     public function estadisticalaboratorio(Request $request)
    {
        if($request->consulta=='examen'){
            $chart = Charts::database(Laboratorio::all(), 'pie', 'highcharts')
            ->title('Exámens por día')
          ->elementLabel("Total de Exámenes Diarios")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupBy('examen_id','examen.examen');
        }else if($request->consulta=='dia'){
            $chart = Charts::database(Laboratorio::all(), 'line', 'highcharts')
            ->dateColumn('created_at')
            ->title('Exámens por Día')
          ->elementLabel("Total de Exámenes Diarios")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupByDay();
        }else{
             $chart = Charts::database(Laboratorio::all(), 'line', 'highcharts')
             ->dateColumn('created_at')
            ->title('Exámenes Meses')
          ->elementLabel("Total de Exámes Mensuales")
          ->dimensions(1000, 500)
          ->responsive(true)
          ->groupByMonth();
        }
        return view('admin.graficas.laboratorio', ['chart' => $chart]);
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
        //
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
