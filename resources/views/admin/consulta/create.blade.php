@extends('layouts.app')

@section('htmlheader_title')
	Registro de Consulta
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
							<h1>Registro de Consulta</h1>
							<div class="col-md-10 col-md-offset-1">
								{!! Form::open(['route'=>'consultas.store','method'=>'POST']) !!}	  
									<div class="form-group col-md-6 ">
										{!! Form::label('title','Paciente')!!}
										{!! Form::select('paciente',$pacientes,null,['class'=>'form-control select-paciente']) !!}
									</div>

									<div class="form-group col-md-6 ">
										{!! Form::label('title','Asignar a')!!}
										{!! Form::select('personal',$users,null,['class'=>'form-control select-personal']) !!}
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
		$('.select-paciente').chosen({
			placeholder_text_single:'Seleccione rol',
			no_results_text: 'No se encontro resultados para el rol '
		});

		$('.select-personal').chosen({
			placeholder_text_single:'Seleccione pesonal para asignar usuario',
			no_results_text: 'No se encontro resultados para '
		});
		

		
	</script>
@endsection