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
							<div class="panel panel-primary">
								<div class="panel-heading"><strong>Información pre consulta </strong></div>
								<div class="panel-body">
									{!! Form::open() !!}
										
										<div class="form-group col-md-3 ">
											{!! Form::label('title','Temperatura Oral')!!}
											{!! Form::text('temp_oral',$preconsulta->temp_oral,['class'=>'form-control','placeholder'=>'Temperatura Oral','required']) !!}
										</div>
										<div class="form-group col-md-3 ">
											{!! Form::label('title','Presión Arterial')!!}
											{!! Form::text('pr_arterial',$preconsulta->pr_arterial,['class'=>'form-control','placeholder'=>'Presión Arterial','required']) !!}
											

										</div>
										<div class="form-group col-md-3 ">
											{!! Form::label('title','Frecuencia Cardíaca')!!}
											{!! Form::text('fr_cardiaca',$preconsulta->fr_cardiaca,['class'=>'form-control','placeholder'=>'Frecuencia Cardíaca','required']) !!}
											

										</div>
										<div class="form-group col-md-3 ">
											{!! Form::label('title','Frecuencia Respiratoria')!!}
											{!! Form::text('fr_respiratoria',$preconsulta->fr_respiratoria,['class'=>'form-control','placeholder'=>'Frecuencia Respiratoria','required']) !!}
											

										</div>
										<div class="form-group col-md-3 ">
											{!! Form::label('title','Peso')!!}
											{!! Form::text('peso',$preconsulta->peso,['class'=>'form-control','placeholder'=>'Peso en libras','required']) !!}
											

										</div>
										<div class="form-group col-md-3 ">
											{!! Form::label('title','Talla')!!}
											{!! Form::text('talla',$preconsulta->talla,['class'=>'form-control','placeholder'=>'Talla en centímetros','required']) !!}
											

										</div>
										<div class="form-group col-md-3 ">
											{!! Form::label('title','AU')!!}
											{!! Form::text('au',$preconsulta->au,['class'=>'form-control','placeholder'=>'AU','required']) !!}
											

										</div>
										<div class="form-group col-md-3 ">
											{!! Form::label('title','FCF')!!}
											{!! Form::text('fcf',$preconsulta->fcf,['class'=>'form-control','placeholder'=>'FCF','required']) !!}
											

									</div>


										

										
										
									{!! Form::close() !!}	
										


								</div>
							
							
								<div class="panel-heading"><strong>Información personal del paciente</strong></div>
								<div class="panel-body">
									{!! Form::open(['route'=>'diagnostico.store','method'=>'POST']) !!}
										{{ Form::hidden('paciente_id', $paciente) }}
										{{ Form::hidden('consulta_id', $consulta) }}
										<div class="form-group col-md-6">
											{!! Form::label('title','Motivo de Consulta')!!}
											{!! Form::textarea('motivo_cons',null,['class'=>'form-control','placeholder'=>'Motivo de Consulta','required']) !!}
										</div>
										<div class="form-group col-md-6">
											{!! Form::label('title','Historial Enfermedad')!!}
											{!! Form::textarea('hist_enfermedad',null,['class'=>'form-control','placeholder'=>'Historial Enfermedad','required']) !!}
										</div>
										<div class="form-group col-md-6">
											{!! Form::label('title','Impresión Clinica')!!}
											{!! Form::textarea('imp_clinica',null,['class'=>'form-control','placeholder'=>'Impresion Clinica','required']) !!}
										</div>
										<div class="form-group col-md-6">
											{!! Form::label('title','Tratamiento')!!}
											{!! Form::textarea('tratamiento',null,['class'=>'form-control','placeholder'=>'Tratamiento','required']) !!}
										</div>
										

										<div class="col-md-12">
											<div class="form-group">
												<a href="#" class="btn btn-warning">Cancelar</a>	
											
												{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
											</div>
										</div>
										
									{!! Form::close() !!}	
										


								</div>
							
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
