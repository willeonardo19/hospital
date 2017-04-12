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
					<div class="panel-heading">Consultas</div>

					<div class="panel-body">
						<div class="container">
							<div class="row">
								<a href="{{route('consultas.create')}}" class="btn btn-primary">Generar Consulta</a>
								
							</div>
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<hr>
									<table class="table table-hover">
										<thead>
											<th>#</th>
											<th>Paciente</th>
											<th>Medico</th>
											<th>Estado</th>
											<th>Opciones</th>
										</thead>
										<tbody>
										@foreach($consultas as $consulta)
											<tr>
												<td>{{ $consulta->id }}</td>
												<td>{{ $consulta->paciente->nombre.', '.$consulta->paciente->apellido }}</td>
												<td>{{ $consulta->usuario->personal->nombre.' '.$consulta->usuario->personal->apellido }}</td>
												@if($consulta->estado=='solicitada')
													<td><span class="label label-primary">{{'Solicitada' }}</span></td>
												@elseif($consulta->estado=='proceso')
													<td><span class="label label-warning">{{'En Proceso' }}</span></td>
												@else
													<td><span class="label label-danger ">{{'Finalizada' }}</span></td>
												@endif
												<td>
													<a href="{{ route('consultas.show',$consulta->paciente_id) }}" class="btn btn-success glyphicon glyphicon-eye-open"></a>
													<a href="{{ route('consultas.edit',$consulta->id) }}" class="btn btn-warning glyphicon glyphicon-edit"></a>
													<a href="{{ route('consultas.destroy',$consulta->id) }}" onClick="return confirm('¿Desea eliminar esta consulta?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
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
