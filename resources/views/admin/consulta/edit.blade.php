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
								{!! Form::open(['route'=>['consultas.update',$consulta],'method'=>'PUT']) !!}	  
									<div class="form-group col-md-6 ">
										{!! Form::label('title','Paciente')!!}
										{!! Form::select('paciente',$pacientes,$consulta->paciente_id,['class'=>'form-control select-paciente']) !!}
									</div>

									<div class="form-group col-md-6 ">
										{!! Form::label('title','Asignar a')!!}
										{!! Form::select('personal',$users,$consulta->usuario_id,['class'=>'form-control select-personal']) !!}
									</div>
									<div class="form-group col-md-6 ">
										{!! Form::label('title','Estado')!!}
										{!! Form::select('estado',['solicitada'=>'Solicitada','proceso'=>'En proceso','finalizada'=>'Finalizada'],$consulta->estado,['class'=>'form-control select-estado']) !!}
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
		$('.select-paciente').chosen({
			placeholder_text_single:'Seleccione rol',
			no_results_text: 'No se encontro resultados para  '
		});

		$('.select-personal').chosen({
			placeholder_text_single:'Seleccione pesonal para asignar usuario',
			no_results_text: 'No se encontro resultados para  '
		});
		$('.select-estado').chosen({
			placeholder_text_single:'Seleccione pesonal para asignar usuario',
			no_results_text: 'No se encontro resultados para  '
		});
		

		
	</script>
@endsection