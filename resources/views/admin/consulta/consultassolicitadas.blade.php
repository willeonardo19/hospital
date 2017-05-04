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
					<div class="panel-heading"><h4>Preconsultas Pendientes</h4></div>
					<div class="panel-body">
						<div class="container-fluid">
							
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<hr>
									<table class="table table-hover">
										<thead>
											<th>#</th>
											<th>Paciente</th>
											
											<th>Estado</th>
											<th>Opciones</th>
										</thead>
										<tbody>
										@foreach($consultas as $consulta)
											<tr>
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
													@if(Auth::user()->type =='admin' || Auth::user()->type =='enfermera' )
														<a href="{{ route('consultas.registropreconsulta',$dato=array('paciente'=>$consulta->paciente_id,'consulta'=>$consulta->id)) }}" class="btn btn-success glyphicon glyphicon-eye-open"></a>
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