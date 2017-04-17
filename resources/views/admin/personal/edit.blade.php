@extends('layouts.app')

@section('htmlheader_title')
	Editar Personal
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
							<h1>Editar de Personal</h1>
							<div class="col-md-10 col-md-offset-1">
								{!! Form::open(['route'=>['personal.update',$persona],'method'=>'PUT']) !!}	  
								<div class="form-group col-md-6">
									{!! Form::label('title','Nombre')!!}
									{!! Form::text('nombre',$persona->nombre,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Apellido')!!}
									{!! Form::text('apellido',$persona->apellido,['class'=>'form-control','placeholder'=>'Apellido','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Teléfono')!!}
									{!! Form::text('telefono',$persona->telefono,['class'=>'form-control','placeholder'=>'Teléfono','maxlength' => '11']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Dirección')!!}
									{!! Form::text('direccion',$persona->direccion,['class'=>'form-control','placeholder'=>'Dirección','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Fecha de Nacimiento')!!}
									{!! Form::date('fechna',$persona->fechna,['class'=>'form-control','placeholder'=>'DPI','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Sexo')!!}
									{!!Form::select('sexo',['masculino'=>'Masculino','femenino'=>'Femenino'],$persona->sexo,['class'=>'form-control select-tipo']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','DPI')!!}
									{!! Form::number('dpi',$persona->dpi,['class'=>'form-control','placeholder'=>'DPI','maxlength' => '30']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Contacto de Emergencia')!!}
									{!! Form::text('contacemer',$persona->contacemer,['class'=>'form-control','placeholder'=>'Contacto de Emergencia','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Teléfono de Emergencia')!!}
									{!! Form::text('contacttel',$persona->contacttel,['class'=>'form-control','placeholder'=>'Teléfono de Emergencia','maxlength' => '11']) !!}
								</div>
								

								<div class="col-md-12">
									<div class="form-group">
										<a href="{{ url('admin/personal') }}" class="btn btn-warning">Cancelar</a>	
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
