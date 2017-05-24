<!-- Formulario de registro de preconsulta utilizado por la enfermera-->
@extends('layouts.app')

@section('htmlheader_title')
	Consultas
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
							<h4><strong>Pre Consulta</strong></h4>

							<div class="panel panel-primary">
								<div class="panel-heading"><strong>Información personal del paciente</strong></div>
								<div class="panel-body">
									
										<div class="form-group col-md-3">
											{!! Form::label('title','Código paciente: '.$paciente->cod_pac)!!}
										</div>
										
									
									
										<div class="form-group col-md-4">
											{!! Form::label('title','Nombre: '. $paciente->nombre.', '.$paciente->apellido)!!}
										</div>
										<div class="form-group col-md-3">
											{!! Form::label('title','Teléfono: '.$paciente->telefono)!!}
										</div>
										<div class="form-group col-md-2">
											{!! Form::label('title','Edad: '.$edad)!!}
										</div>

									
										<div class="form-group col-md-3">
											{!! Form::label('title','Fecha de Nacimiento: '.$fecha)!!}
										</div>

										<div class="form-group col-md-4">
											{!! Form::label('title','Contacto de emergencia: '.$paciente->contacemer)!!}
										</div>
										<div class="form-group col-md-4">
											{!! Form::label('title','Teléfono de emergencia: '.$paciente->contacttel)!!}
										</div>



										<div class="form-group col-md-3">
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
											{!! Form::label('title','Religion: '.$paciente->religion)!!}
										</div>
									
									
										
										
									

								</div>
							
									<div class="panel-heading"><strong>Registrar Pre Consulta de {{$paciente->nombre.', '.$paciente->apellido}}</strong></div>
										<div class="panel-body">
											<table class="table">
								    			{!! Form::open(['route'=>'preconsultas.store','method'=>'POST']) !!}
								    				<div class="form-group col-md-3 ">
														{!! Form::label('title','Estado de Conciencia')!!}
														{!! Form::text('est_conciencia',null,['class'=>'form-control','placeholder'=>'Estado de conciencia','required']) !!}
													</div>	 
													<div class="form-group col-md-3 ">
														{!! Form::label('title','Antecedentes Médicos')!!}
														{!! Form::text('ant_medicos',null,['class'=>'form-control','placeholder'=>'Antecedentes  Médicos','required']) !!}
													</div> 
													<div class="form-group col-md-3 ">
														{!! Form::label('title','Antecedentes Quirúrgicos ')!!}
														{!! Form::text('ant_quirurgicos',null,['class'=>'form-control','placeholder'=>'Antecedentes Quirúrgicos ','required']) !!}
													</div> 
													<div class="form-group col-md-3 ">
														{!! Form::label('title','Antecedentes Alérgicos')!!}
														{!! Form::text('ant_alergicos',null,['class'=>'form-control','placeholder'=>'Antecedentes Alérgicos ','required']) !!}
													</div> 
													<div class="form-group col-md-3 ">
														{!! Form::label('title','Antecedentes Traumáticos')!!}
														{!! Form::text('ant_traumaticos',null,['class'=>'form-control','placeholder'=>'Antecedentes  Traumáticos','required']) !!}
													</div> 
													<div class="form-group col-md-3 ">
														{!! Form::label('title','Antecedentes Familiares')!!}
														{!! Form::text('ant_familiares',null,['class'=>'form-control','placeholder'=>'Antecedentes  Familiares','required']) !!}
													</div> 
													<div class="form-group col-md-3 ">
														{!! Form::label('title','Temperatura Oral')!!}
														{!! Form::text('temp_oral',null,['class'=>'form-control','placeholder'=>'Temperatura Oral','required']) !!}
														{{ Form::hidden('paciente_id', $paciente->id) }}
														{{ Form::hidden('consulta_id', $consulta_id) }}

													</div>
													<div class="form-group col-md-3 ">
														{!! Form::label('title','Presión Arterial')!!}
														{!! Form::text('pr_arterial',null,['class'=>'form-control','placeholder'=>'Presión Arterial','required']) !!}
														

													</div>
													<div class="form-group col-md-3 ">
														{!! Form::label('title','Frecuencia Cardíaca')!!}
														{!! Form::text('fr_cardiaca',null,['class'=>'form-control','placeholder'=>'Frecuencia Cardíaca','required']) !!}
														

													</div>
													<div class="form-group col-md-3 ">
														{!! Form::label('title','Frecuencia Respiratoria')!!}
														{!! Form::text('fr_respiratoria',null,['class'=>'form-control','placeholder'=>'Frecuencia Respiratoria','required']) !!}
														

													</div>
													<div class="form-group col-md-3 ">
														{!! Form::label('title','Peso')!!}
														{!! Form::text('peso',null,['class'=>'form-control','placeholder'=>'Peso en libras','required']) !!}
														

													</div>
													<div class="form-group col-md-3 ">
														{!! Form::label('title','Talla')!!}
														{!! Form::text('talla',null,['class'=>'form-control','placeholder'=>'Talla en centímetros','required']) !!}
														

													</div>
													<div class="form-group col-md-3 ">
														{!! Form::label('title','AU')!!}
														{!! Form::text('au',null,['class'=>'form-control','placeholder'=>'AU']) !!}
														

													</div>
													<div class="form-group col-md-3 ">
														{!! Form::label('title','FCF')!!}
														{!! Form::text('fcf',null,['class'=>'form-control','placeholder'=>'FCF']) !!}
														

													</div>



													<div class="col-md-12">
														<div class="form-group">
															<a href="{{ url('admin/preconsulta') }}" class="btn btn-warning">Atrás</a>
															{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
														</div>
													</div>
												{!! Form::close() !!}	
								
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
