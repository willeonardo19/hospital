@extends('layouts.app')

@section('htmlheader_title')
	Pacientes
@endsection

@section('contentheader_title')
	
@endsection
@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-primary">
					<div class="panel-heading">Pacientes</div>

					<div class="panel-body">
						<div class="container">
							<div class="row">
								<a href="{{route('pacientes.create')}}" class="btn btn-primary">Agregar Paciente</a>
								{!! Form::open(['pacientes.index','method' =>'GET', 'class'=>'navbar-form pull-right'])!!}
									<div class="input-group">
										{!! Form::text('buscar',null,['class'=>'form-control','placeholder'=>'Buscar Paciente','aria-describedby'=>'search'])!!}
										<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
									</div>
								{!! Form::close() !!}
							</div>
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<hr>
									<table class="table table-hover">
										<thead>
											<th>#</th>
											<th>Nombre</th>
											<th>Teléfono</th>
											<th>Dirección</th>
											<th>DPI</th>
											
											<th>Opciones</th>
										</thead>
										<tbody>
										@foreach($pacientes as $paciente)
											<tr>
												<td>{{ $paciente->id }}</td>
												<td>{{ $paciente->apellido.', '.$paciente->nombre }}</td>
												<td>{{ $paciente->telefono }}</td>
												<td>{{ $paciente->direccion }}</td>
												<td>{{ $paciente->dpi }}</td>
												
												<td>
													<a href="{{ route('pacientes.show',$paciente->id) }}" class="btn btn-success glyphicon glyphicon-eye-open"></a>
													<a href="{{ route('pacientes.edit',$paciente->id) }}" class="btn btn-warning glyphicon glyphicon-edit"></a>
													<a href="{{ route('pacientes.destroy',$paciente->id) }}" onClick="return confirm('¿Desea eliminar esta paciente?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
												</td>
											</tr>
										@endforeach
										</tbody>
								  	</table>
								</div>
								<div class="text-center">
  									{!! $pacientes->render() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
