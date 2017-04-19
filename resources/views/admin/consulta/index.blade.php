@extends('layouts.app')

@section('htmlheader_title')
	Consultas
@endsection

@section('contentheader_title')
	
@endsection
@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-primary">
					<div class="panel-heading"><h4>Registro de Consulta</h4></div>
					<div class="panel-body">
						<div class="container-fluid">
							@if(Auth::user()->type =='admin' || Auth::user()->type =='secretaria' )
							<div class="col-md-10 col-md-offset-1">
								{!! Form::open(['route'=>'consultas.store','method'=>'POST']) !!}	  
									<div class="form-group col-md-6 ">
										{!! Form::label('title','Paciente')!!}
										{!! Form::select('paciente',$pacientes,null,['class'=>'form-control select-paciente']) !!}
									</div>
									<div class="col-md-12">
										<div class="form-group">
											{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
										</div>
									</div>
								{!! Form::close() !!}	
								
							</div>
							@endif
					
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<hr>
									<table class="table table-hover">
										<thead>
											<th>#</th>
											<th>id</th>
											<th>Paciente</th>
											<th>Estado</th>
											<th>Opciones</th>
										</thead>
										<tbody>
										@foreach($consultas as $consulta)
											<tr>
												<td>{{ $consulta->index }}</td>
												<td>{{ $consulta->id }}</td>
												<td>{{ $consulta->paciente->nombre.', '.$consulta->paciente->apellido }}</td>
												
												@if($consulta->estado=='solicitada')
													<td><span class="label label-primary">{{'Solicitada' }}</span></td>
												@elseif($consulta->estado=='proceso')
													<td><span class="label label-warning">{{'En Proceso' }}</span></td>
												@else
													<td><span class="label label-danger ">{{'Finalizada' }}</span></td>
												@endif
												<td>
													@if(Auth::user()->type =='admin' || Auth::user()->type =='doctor' )
														<a href="{{ route('consultas.show',$consulta->paciente_id) }}" class="btn btn-success glyphicon glyphicon-eye-open"></a>
													@else
														<a href="{{ route('consultas.edit',$consulta->id) }}" class="btn btn-warning glyphicon glyphicon-edit"></a>
														<a href="{{ route('consultas.destroy',$consulta->id) }}" onClick="return confirm('¿Desea eliminar esta consulta?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
													@endif
												</td>
											</tr>
										@endforeach
										</tbody>
								  	</table>
								</div>
								<div class="text-center">
  									{!! $consultas->render() !!}
								</div>
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

	</script>
@endsection