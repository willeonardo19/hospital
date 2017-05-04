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
								<a href="{{url('admin/ExportarPacientes')}}" class="btn btn-success">Exportar Excel</a>
								{!! Form::open(['pacientes.index','method' =>'GET', 'class'=>'navbar-form pull-right'])!!}
									<div class="input-group">
										{!! Form::text('buscar',null,['class'=>'form-control','placeholder'=>'Buscar Paciente','aria-describedby'=>'search'])!!}
										<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
									</div>
								{!! Form::close() !!}
							<hr>
									<form action="ImportarPacientes" method="POST" enctype="multipart/form-data">
										{!!Form::file('file');!!}
										<input type="hidden" value="{{csrf_token()}}" name="_token">
										<button class="btn btn-warning" type="submit">Cargar Archivo</button>
									</form>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-10 col-lg-12">
									<hr>
									<table class="table table-hover">
										<thead>
											<th class="hidden-xs hidden-md">#</th>
											<th>Nombre</th>
											<th>Teléfono</th>
											<th class="hidden-xs hidden-md">Dirección</th>
											<th class="hidden-xs hidden-sm hidden-md">DPI</th>
											
											<th>Opciones</th>
										</thead>
										<tbody>
										@foreach($pacientes as $paciente)
											<tr>
												<td class="hidden-xs hidden-md">{{ $paciente->id }}</td>
												<td>{{ $paciente->apellido.', '.$paciente->nombre }}</td>
												<td>{{ $paciente->telefono }}</td>
												<td class="hidden-xs hidden-md">{{ $paciente->direccion }}</td>
												<td class="hidden-xs hidden-sm hidden-md">{{ $paciente->dpi }}</td>
												
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
