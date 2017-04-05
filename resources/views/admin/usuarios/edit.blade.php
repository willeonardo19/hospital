@extends('layouts.app')

@section('htmlheader_title')
	Editar Usuario
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
							<h1>Editar Usuario</h1>
							<div class="col-md-10 col-md-offset-1">
								{!! Form::open(['route'=>['usuarios.update',$user],'method'=>'PUT']) !!}	  
								<div class="form-group col-md-6">
									{!! Form::label('title','Nombre de Usuario')!!}
									{!! Form::text('user',$user->user,['class'=>'form-control','placeholder'=>'Nombre de Usuario','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Email')!!}
									{!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'ejemplo@correo.com','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Contraseña')!!}
									{!! Form::password('password',['class'=>'form-control','placeholder'=>'***********','required'])!!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Rol')!!}
									{!! Form::select('rol',$tipos,$user->type,['class'=>'form-control select-tipo']) !!}
								</div>
								<div class="form-group col-md-6 ">
									{!! Form::label('title','Asignar a')!!}
									{!! Form::select('idpersonal',$personal,$user->personal_id,['class'=>'form-control select-personal']) !!}
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