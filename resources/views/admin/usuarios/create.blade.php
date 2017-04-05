@extends('layouts.app')

@section('htmlheader_title')
	Registro Usuarios
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
							<h1>Crear Usuario</h1>
							<div class="col-md-10 col-md-offset-1">
								{!! Form::open(['route'=>'usuarios.store','method'=>'POST']) !!}	  
								<div class="form-group col-md-6">
									{!! Form::label('title','Nombre de Usuario')!!}
									{!! Form::text('user',null,['class'=>'form-control','placeholder'=>'Nombre de Usuario','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Email')!!}
									{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'ejemplo@correo.com','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Contraseña')!!}
									{!! Form::password('password',['class'=>'form-control','placeholder'=>'***********','required'])!!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Rol')!!}
									{!! Form::select('rol',$tipos,null,['class'=>'form-control select-tipo']) !!}
								</div>
								<div class="form-group col-md-6 ">
									{!! Form::label('title','Asignar a')!!}
									{!! Form::select('idpersonal',$personal,null,['class'=>'form-control select-personal']) !!}
								</div>
								<div class="col-md-12">
									<div class="form-group">
										{!! Form::submit('Crear',['class'=>'btn btn-primary'])!!}
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
		$('.select-tipo').chosen({
			placeholder_text_single:'Seleccione rol',
			no_results_text: 'No se encontro resultados para el rol '
		});

		$('.select-personal').chosen({
			placeholder_text_single:'Seleccione pesonal para asignar usuario',
			no_results_text: 'No se encontro resultados para '
		});
		

		
	</script>
@endsection