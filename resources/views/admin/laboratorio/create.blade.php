@extends('layouts.app')

@section('htmlheader_title')
	Registro de Examen
@endsection

@section('contentheader_title')
	
@endsection
@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-primary">
					<div class="panel-heading">Subir Archivo Laboratorio</div>

					<div class="panel-body">
						<div class="container">
							<div class="row">
									{!! Form::open(['route'=>'laboratorio.store','method'=>'POST','files'=>true]) !!}	  
									<div class="form-group col-md-6">
										{!! Form::label('title','Paciente')!!}
										{!!Form::select('paciente_id',$pacientes,null,['class'=>'form-control select-paciente','required']) !!}
									</div>
									<div class="form-group col-md-6">
										{!! Form::label('title','Exámen')!!}
										{!!Form::select('examen_id',$examenes,null,['class'=>'form-control select-examen','required']) !!}
									</div>
									<div class="form-group col-md-6 ">
										{!! Form::label('title','Archivo')!!}
										{!! Form::file('pdf_file',null,['class'=>'form-control','required']) !!}
									</div>
									<div class="col-md-12">
									<div class="form-group">
										<a href="{{ url('admin/laboratorio') }}" class="btn btn-warning">Cancelar</a>	
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
			placeholder_text_single:'Seleccione Paciente',
			no_results_text: 'No se encontro resultados para el paciente '
		});
		$('.select-examen').chosen({
			placeholder_text_single:'Seleccione Exámen',
			no_results_text: 'No se encontro resultados para exámen '
		});

	</script>
@endsection