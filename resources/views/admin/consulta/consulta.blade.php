<!--esta es la vista donde se visualizara la info del paciente
y el historial de consulta que ha tenido -->
@extends('layouts.app')

@section('htmlheader_title')
	Diagnóstico Médico
@endsection

@section('contentheader_title')
	
@endsection
@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-">
					<div class="panel-body">
						<div class="container-fluid">
							<h4>Diagnóstico Médico</h4>
							
							<div class="panel panel-primary">
								<div class="panel-heading"><strong>Información personal del paciente</strong></div>
								<div class="panel-body">
								
										<div class="form-group col-md-4">
											{!! Form::label('title','Código paciente: '.$paciente->cod_pac)!!}
										</div>
										<div class="form-group col-md-6">
											{!! Form::label('title','DPI: '.$paciente->dpi)!!}
										</div>

										<div class="form-group col-md-4">
											{!! Form::label('title','Nombre: '. $paciente->nombre.', '.$paciente->apellido)!!}
										</div>
										<div class="form-group col-md-4">
											{!! Form::label('title','Teléfono: '.$paciente->telefono)!!}
										</div>
										<div class="form-group col-md-2">
											{!! Form::label('title','Edad: '.$edad)!!}
										</div>

										<div class="form-group col-md-4">
											{!! Form::label('title','Fecha de Nacimiento: '.$fecha)!!}
										</div>
										<div class="form-group col-md-4">
											@if($paciente->sexo=='masculino')
												{!! Form::label('title','Sexo: Masculino')!!}
											@else 
												{!! Form::label('title','Sexo: Femenino')!!}
											@endif
										</div>
										<div class="form-group col-md-4">
											@if($paciente->est_civ == 'soltero')
												{!! Form::label('title','Estado Civil: Soltero(a)')!!}
											@elseif($paciente->est_civ == 'casado')
												{!! Form::label('title','Estado Civil: Casado(a)')!!}
											@elseif($paciente->est_civ == 'divorciado')
												{!! Form::label('title','Estado Civil: Divorciado(a)')!!}
											@elseif($paciente->est_civ == 'viudo')
												{!! Form::label('title','Estado Civil: Viudo(a)')!!}
											@else
												{!! Form::label('title','Estado Civil: Union')!!}

											@endif
										</div>
									
										<div class="form-group col-md-4">
											{!! Form::label('title','Ocupación: '.$paciente->ocupacion)!!}
										</div>
										<div class="form-group col-md-6">
											{!! Form::label('title','Dirección: '.$paciente->direccion)!!}
										</div>
									
							
										<div class="form-group col-md-4">
											{!! Form::label('title','Contacto de emergencia: '.$paciente->contacemer)!!}
										</div>
										<div class="form-group col-md-4">
											{!! Form::label('title','Teléfono de emergencia: '.$paciente->contacttel)!!}
										</div>
										<div class="form-group col-md-4">
											{!! Form::label('title','Religion: '.$paciente->religion)!!}
										</div>
									
										<hr>


								</div>
							<div class="panel-heading"><strong>Historial clinico</strong></div>
								<div class="panel-body">
								<div>
								<a href="{{ url('admin/consulta') }}" class="btn btn-warning">Atrás</a> <a href="{{url('admin/diagnostico/create').'?paciente='.$paciente->id.'&consulta='.$consulta_id}}" class="btn btn-success">Nuevo Diagnóstico</a></div>
								<table class="table">
								    <thead>
								      <tr>
								        
								        <th>Fecha</th>
								        <th>Médico</th>
								        <th>Opciones</th>
								      </tr>
								    </thead>
								    <tbody>
								      @foreach($consultasdelpaciente as $consultadelpaciente)
										<tr>
											<td>{{$consultadelpaciente->created_at->format('d/M/Y')}}</td>
											<td>{{$consultadelpaciente->diagnostico->users->personal->nombre.', '.$consultadelpaciente->diagnostico->users->personal->apellido}}</td>
											<td><a href="{{ url('admin/showhistorial').'?idcon='.$consultadelpaciente->id }}" target="_blank" class="btn btn-success glyphicon glyphicon glyphicon-log-out"></a></td>
										</tr>

								      @endforeach
								    </tbody>
								  </table>
								</div>
								<div class="text-center">
  									{!! $consultasdelpaciente->render() !!}
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
