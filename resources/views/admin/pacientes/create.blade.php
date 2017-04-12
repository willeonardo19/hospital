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
								<div class="form-group col-md-6">
									{!! Form::label('title','Código paciente')!!}
									{!! Form::number('cod_paciente',null,['class'=>'form-control','placeholder'=>'Código paciente','required']) !!}
								</div>
								<div class="form-group col-md-6 ">
									{!! Form::label('title','DPI')!!}
									{!! Form::number('dpi',null,['class'=>'form-control','placeholder'=>'Dpi']) !!}
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
									{!!Form::select('sexo',['masculino'=>'Masculino','femenino'=>'Femenino'],null,['class'=>'form-control select-sexo']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Estado Civil')!!}
									{!!Form::select('est_civ',['soltero'=>'Soltero','casado'=>'Casado','divorciado'=>'Divorciado','viudo'=>'Viudo','union'=>'Union'],null,['class'=>'form-control select-estado']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Ocupación')!!}
									{!! Form::text('ocupacion',null,['class'=>'form-control','placeholder'=>'Ocupacion','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Dirección')!!}
									{!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Dirección','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Contacto de Emergencia')!!}
									{!! Form::text('contacemer',null,['class'=>'form-control','placeholder'=>'Contacto de Emergencia','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Teléfono de Emergencia')!!}
									{!! Form::number('contacttel',null,['class'=>'form-control','placeholder'=>'Teléfono de Emergencia','maxlength' => '11']) !!}
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
@section('js')
<script src="{{asset('assets/bootstrap/js/dropdown.js')}}"></script>
	<script>
		$('.select-sexo').chosen({
			placeholder_text_single:'Seleccione rol',
			no_results_text: 'No se encontro resultados para el rol '
		});

		$('.select-estado').chosen({
			placeholder_text_single:'Seleccione pesonal para asignar usuario',
			no_results_text: 'No se encontro resultados para '
		});
		

		
	</script>
@endsection