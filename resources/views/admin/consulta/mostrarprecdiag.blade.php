
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
										<div class="form-group col-md-4 ">
											{!! Form::label('title','Estado de Conciencia')!!}
											{!! Form::text('temp_oral',$preconsulta->est_conciencia,['class'=>'form-control','placeholder'=>'Temperatura Oral','required','disabled'=>'true']) !!}
										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','Antecedentes Médicos')!!}
											{!! Form::text('temp_oral',$preconsulta->ant_medicos,['class'=>'form-control','placeholder'=>'Temperatura Oral','required','disabled'=>'true']) !!}
										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','Antecedentes Quirúrgicos')!!}
											{!! Form::text('temp_oral',$preconsulta->ant_quirurgicos,['class'=>'form-control','placeholder'=>'Temperatura Oral','required','disabled'=>'true']) !!}
										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','Antecedentes Alérgicos')!!}
											{!! Form::text('temp_oral',$preconsulta->ant_alergicos,['class'=>'form-control','placeholder'=>'Temperatura Oral','required','disabled'=>'true']) !!}
										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','Antecedentes Traumáticos')!!}
											{!! Form::text('temp_oral',$preconsulta->ant_traumaticos,['class'=>'form-control','placeholder'=>'Temperatura Oral','required','disabled'=>'true']) !!}
										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','Antecedentes Familiares')!!}
											{!! Form::text('temp_oral',$preconsulta->ant_familiares,['class'=>'form-control','placeholder'=>'Temperatura Oral','required','disabled'=>'true']) !!}
										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','Temperatura Oral')!!}
											{!! Form::text('temp_oral',$preconsulta->temp_oral,['class'=>'form-control','placeholder'=>'Temperatura Oral','disabled'=>'true']) !!}
										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','Presión Arterial')!!}
											{!! Form::text('pr_arterial',$preconsulta->pr_arterial,['class'=>'form-control','placeholder'=>'Presión Arterial','disabled'=>'true']) !!}
											

										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','Frecuencia Cardíaca')!!}
											{!! Form::text('fr_cardiaca',$preconsulta->fr_cardiaca,['class'=>'form-control','placeholder'=>'Frecuencia Cardíaca','disabled'=>'true']) !!}
											

										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','Frecuencia Respiratoria')!!}
											{!! Form::text('fr_respiratoria',$preconsulta->fr_respiratoria,['class'=>'form-control','placeholder'=>'Frecuencia Respiratoria','disabled'=>'true']) !!}
											

										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','Peso')!!}
											{!! Form::text('peso',$preconsulta->peso,['class'=>'form-control','placeholder'=>'Peso en libras','disabled'=>'true']) !!}
											

										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','Talla')!!}
											{!! Form::text('talla',$preconsulta->talla,['class'=>'form-control','placeholder'=>'Talla en centímetros','disabled'=>'true']) !!}
											

										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','AU')!!}
											{!! Form::text('au',$preconsulta->au,['class'=>'form-control','placeholder'=>'AU','disabled'=>'true']) !!}
											

										</div>
										<div class="form-group col-md-4 ">
											{!! Form::label('title','FCF')!!}
											{!! Form::text('fcf',$preconsulta->fcf,['class'=>'form-control','placeholder'=>'FCF','disabled'=>'true']) !!}
											

									</div>


										

										
										
									{!! Form::close() !!}	
										


								</div>
							
							
								<div class="panel-heading"><strong>Diagnóstico</strong></div>
								<div class="panel-body">
									{!! Form::open(['route'=>'diagnostico.store','method'=>'POST']) !!}
										
										<div class="form-group col-md-6">
											{!! Form::label('title','Motivo de Consulta')!!}
											{!! Form::textarea('motivo_cons',$diagnostico->motivo_cons,['class'=>'form-control','placeholder'=>'Motivo de Consulta','required','disabled'=>'true']) !!}
										</div>
										<div class="form-group col-md-6">
											{!! Form::label('title','Historial Enfermedad')!!}
											{!! Form::textarea('hist_enfermedad',$diagnostico->hist_enfermedad,['class'=>'form-control','placeholder'=>'Historial Enfermedad','required','disabled'=>'true']) !!}
										</div>
										<div class="form-group col-md-6">
											{!! Form::label('title','Impresión Clinica')!!}
											{!! Form::textarea('imp_clinica',$diagnostico->imp_clinica,['class'=>'form-control','placeholder'=>'Impresion Clinica','required','disabled'=>'true']) !!}
										</div>
										<div class="form-group col-md-6">
											{!! Form::label('title','Tratamiento')!!}
											{!! Form::textarea('tratamiento',$diagnostico->tratamiento,['class'=>'form-control','placeholder'=>'Tratamiento','required','disabled'=>'true']) !!}
										</div>
										

										<div class="col-md-12">
											<div class="form-group">
												<a href="{{ url('admin/historial') }}" class="btn btn-warning">Atrás</a>	
											
												
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
