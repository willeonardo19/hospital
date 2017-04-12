@extends('layouts.app')

@section('htmlheader_title')
	Editar Paciente
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
							<h1>Registro de Pacientes</h1>
							<div class="col-md-10 col-md-offset-1">
								{!! Form::open(['route'=>['pacientes.update',$paciente],'method'=>'PUT']) !!}	  
								<div class="form-group col-md-6">
									{!! Form::label('title','Código paciente')!!}
									{!! Form::number('cod_paciente',$paciente->cod_pac,['class'=>'form-control','placeholder'=>'Código paciente','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','DPI')!!}
									{!! Form::number('dpi',$paciente->dpi,['class'=>'form-control','placeholder'=>'Dpi']) !!}
								</div>

								<div class="form-group col-md-6">
									{!! Form::label('title','Nombre')!!}
									{!! Form::text('nombre',$paciente->nombre,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Apellido')!!}
									{!! Form::text('apellido',$paciente->apellido,['class'=>'form-control','placeholder'=>'Apellido','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Teléfono')!!}
									{!! Form::number('telefono',$paciente->telefono,['class'=>'form-control','placeholder'=>'Teléfono','maxlength' => '11']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Fecha de Nacimiento')!!}
									{!! Form::date('fechna',$paciente->fech_na,['class'=>'form-control','placeholder'=>'DPI','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Sexo')!!}
									{!!Form::select('sexo',['masculino'=>'Masculino','femenino'=>'Femenino'],$paciente->sexo,['class'=>'form-control select-tipo']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Estado Civil')!!}
									{!!Form::select('est_civ',['soltero'=>'Soltero','casado'=>'Casado','divorciado'=>'Divorciado','viudo'=>'Viudo','union'=>'Union'],$paciente->est_civ,['class'=>'form-control select-tipo']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Ocupación')!!}
									{!! Form::text('ocupacion',$paciente->ocupacion,['class'=>'form-control','placeholder'=>'Ocupación','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Dirección')!!}
									{!! Form::text('direccion',$paciente->direccion,['class'=>'form-control','placeholder'=>'Dirección','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Contacto de Emergencia')!!}
									{!! Form::text('contacemer',$paciente->contacemer,['class'=>'form-control','placeholder'=>'Contacto de Emergencia','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Teléfono de Emergencia')!!}
									{!! Form::text('contacttel',$paciente->contacttel,['class'=>'form-control','placeholder'=>'Teléfono de Emergencia','maxlength' => '11']) !!}
								</div>
								


								<div class="col-md-12">
									<div class="form-group">
										{!! Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
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
@endsection
