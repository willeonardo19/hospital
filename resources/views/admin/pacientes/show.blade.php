@extends('layouts.app')

@section('htmlheader_title')
	Mostrar Paciente
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
							
							<div class="panel panel-primary">
								<div class="panel-heading"><h4><strong>Información personal del paciente</strong></h4></div>
								<div class="panel-body">
									<div>
										<div class="form-group col-md-4">
											{!! Form::label('title','Código paciente: '.$paciente->cod_pac)!!}
										</div>
										<div class="form-group col-md-6">
											{!! Form::label('title','DPI: '.$paciente->dpi)!!}
										</div>
									</div>
									<div>
										<div class="form-group col-md-4">
											{!! Form::label('title','Nombre: '. $paciente->nombre.', '.$paciente->apellido)!!}
										</div>
										<div class="form-group col-md-4">
											{!! Form::label('title','Teléfono: '.$paciente->telefono)!!}
										</div>
										<div class="form-group col-md-2">
											{!! Form::label('title','Edad: '.$edad)!!}
										</div>

									</div>
									<div>
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
									</div>
									<div>
										<div class="form-group col-md-4">
											@if($paciente->religion == 'catolica')
												{!! Form::label('title','Religión: Católico(a)')!!}
											@elseif($paciente->religion == 'cristiana')
												{!! Form::label('title','Religión: Cristiano(a)')!!}
											
											@else
												{!! Form::label('title','Religión: Otra')!!}

											@endif
										</div>
										<div class="form-group col-md-4">
											{!! Form::label('title','Ocupación: '.$paciente->ocupacion)!!}
										</div>
										<div class="form-group col-md-4">
											{!! Form::label('title','Dirección: '.$paciente->direccion)!!}
										</div>
										
									</div>
									<div>
										
										<div class="form-group col-md-4">
											{!! Form::label('title','Contacto de emergencia: '.$paciente->contacemer)!!}
										</div>
										<div class="form-group col-md-4">
											{!! Form::label('title','Teléfono de emercengia: '.$paciente->contacttel)!!}
										</div>
										
									</div>

								</div>
							

							<table class="table table-hover table-responsive">
								<thead>
									<th class="hidden-xs hidden-md">#</th>
									<th>Fecha</th>
									<th>Médico</th>
									<th>Opciones</th>
								</thead>
								<tbody>
								@foreach($consultas as $consulta)
									<tr>
										<td class="hidden-xs hidden-md">{{ $consulta->id }}</td>
										<td>{{ $consulta->created_at->format('d-M-Y')}}</td>
										<td>{{ $consulta->diagnostico->users->personal->nombre.',' .$consulta->diagnostico->users->personal->apellido}}</td>
										
										
										<td>
											<a href="{{ url('admin/constancia_med').'?idc='.$consulta->id}}" class="btn btn-success glyphicon glyphicon-log-in"></a>
											
										</td>
									</tr>
								@endforeach
								</tbody>
						  	</table>
						</div>
							<div class="text-center">
  									{!! $consultas->render() !!}
								</div>
							<div class="col-md-12 ">
								<hr>
								<a href="{{ url('admin/pacientes') }}" class="btn btn-warning">Atrás</a>	

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
