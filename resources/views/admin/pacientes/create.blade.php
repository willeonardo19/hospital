@extends('layouts.app')

@section('htmlheader_title')
	Registro Pacientes
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
								{!! Form::open(['route'=>'pacientes.store','method'=>'POST']) !!}	  
								<div class="form-group col-md-6 col-md-offset-6">
									{!! Form::label('title','Código paciente')!!}
									{!! Form::number('cod_paciente',null,['class'=>'form-control','placeholder'=>'Código paciente','required']) !!}
								</div>

								<div class="form-group col-md-6">
									{!! Form::label('title','Nombre')!!}
									{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Apellido')!!}
									{!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellido','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Teléfono')!!}
									{!! Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Teléfono','maxlength' => '11']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Fecha de Nacimiento')!!}
									{!! Form::date('fechna',null,['class'=>'form-control','placeholder'=>'DPI','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Sexo')!!}
									{!!Form::select('sexo',['masculino'=>'Masculino','femenino'=>'Femenido'],null,['class'=>'form-control select-tipo']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Estado Civil')!!}
									{!!Form::select('est_civ',['soltero'=>'Soltero','casado'=>'Casado','divorciado'=>'Divorciado','viudo'=>'Viudo','union'=>'Union'],null,['class'=>'form-control select-tipo']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Ocupación')!!}
									{!! Form::text('ocupacion',null,['class'=>'form-control','placeholder'=>'Contacto de Emergencia','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Dirección')!!}
									{!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Dirección','required']) !!}
								</div>
								
								
								
								
								

								<div class="col-md-12">
									<div class="form-group">
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
@endsection
