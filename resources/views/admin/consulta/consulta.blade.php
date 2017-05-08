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
								<div><a href="{{url('admin/diagnostico/create').'?paciente='.$paciente->id.'&consulta='.$consulta_id}}" class="btn btn-success">Nuevo Diagnóstico</a></div>
								<table class="table">
								    <thead>
								      <tr>
								        <th>Diagnóstico</th>
								        <th>Fecha</th>
								        <th>Detalles</th>
								      </tr>
								    </thead>
								    <tbody>
								      
								    </tbody>
								  </table>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
