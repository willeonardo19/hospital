@extends('layouts.app')

@section('htmlheader_title')
	Historial de Consultas
@endsection

@section('contentheader_title')
	
@endsection
@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-primary">
					<div class="panel-heading">Historial de Consultas</div>

					<div class="panel-body">
						<div class="container">
							
							<div class="row">
								<div class="col-xs-12 col-sm-10 col-md-10  col-lg-12 ">
									<hr>
									<table class="table table-hover table-responsive">
										<thead>
											<th class="hidden-xs">#</th>
											<th>Paciente</th>
											<th>Medico</th>
											<th>Fecha</th>
											<th>Estado</th>
											<th>Opciones</th>
										</thead>
										<tbody>
										@foreach($consultas as $consulta)
											<tr>
												<td class="hidden-xs">{{ $consulta->id }}</td>
												<td>{{ $consulta->paciente->nombre.', '.$consulta->paciente->apellido }}</td>
												@if($consulta->diagnostico==null)
													<td>Sin dato</td>
												@else
													<td>{{ $consulta->diagnostico->users->personal->nombre.', '.$consulta->diagnostico->users->personal->apellido}}</td>
												@endif
												<td class="hidden-xs">{{ $consulta->created_at->format('d/M/Y') }}</td>
												@if($consulta->estado=='solicitada')
													<td><span class="label label-primary">{{'Solicitada' }}</span></td>
												@elseif($consulta->estado=='proceso')
													<td><span class="label label-warning">{{'En Proceso' }}</span></td>
												@else
													<td><span class="label label-danger ">{{'Finalizada' }}</span></td>
												@endif
												<td>
													<a href="{{ url('admin/showhistorial').'?idcon='.$consulta->id }}" class="btn btn-success glyphicon glyphicon-eye-open"></a>
													
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
