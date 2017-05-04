@extends('layouts.app')

@section('htmlheader_title')
	Personal
@endsection

@section('contentheader_title')
	
@endsection
@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-primary">
					<div class="panel-heading">Personal</div>

					<div class="panel-body">
						<div class="container">
							<div class="row">
									<a href="{{route('personal.create')}}" class="btn btn-primary">Agregar Personal</a>
									<a href="{{url('admin/ExportarPersonal')}}" class="btn btn-success">Exportar Excel</a>
									{!! Form::open(['personal.index','method' =>'GET', 'class'=>'navbar-form pull-right'])!!}
										<div class="input-group">
											{!! Form::text('buscar',null,['class'=>'form-control','placeholder'=>'Buscar Personal','aria-describedby'=>'search'])!!}
											<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
										</div>
									{!! Form::close() !!}
									<hr>
									<form action="ImportarPersonal" method="POST" enctype="multipart/form-data">
										{!!Form::file('file');!!}
										<input type="hidden" value="{{csrf_token()}}" name="_token">
										<button class="btn btn-warning" type="submit">Cargar Archivo</button>
									</form>
										
										
								
								
							</div>
							<div class="container">
								<div class="col-xs-12 col-sm-12 col-md-10 col-lg-12">
									<hr>
									<table class="table table-hover">
										<thead>
											<th class="hidden-xs">#</th>
											<th>Nombre</th>
											<th>Teléfono</th>
											<th class="hidden-xs hidden-sm hidden-md">Dirección</th>
											<th class="hidden-xs hidden-sm hidden-md">DPI</th>
											<th>Opciones</th>
										</thead>
										<tbody>
										@foreach($personal as $persona)
											<tr>
												<td class="hidden-xs">{{ $persona->id }}</td>
												<td>{{ $persona->apellido.', '.$persona->nombre }}</td>
												<td>{{ $persona->telefono }}</td>
												<td class="hidden-xs hidden-sm hidden-md">{{ $persona->direccion }}</td>
												<td class="hidden-xs hidden-sm hidden-md">{{ $persona->dpi }}</td>
												<td>
													<a href="{{ route('personal.edit',$persona->id) }}" class="btn btn-warning glyphicon glyphicon-edit"></a>

													<a href="{{ route('personal.destroy',$persona->id) }}" onClick="return confirm('¿Desea eliminar esta persona?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
												</td>
											</tr>
										@endforeach
										</tbody>
								  	</table>
								</div>
								<div class="text-center">
  									{!! $personal->render() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
