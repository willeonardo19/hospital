@extends('layouts.app')

@section('htmlheader_title')
	Laboratorio
@endsection

@section('contentheader_title')
	
@endsection
@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-primary">
					<div class="panel-heading">Exámenes de Laboratorio</div>

					<div class="panel-body">
						<div class="container">
							<div class="row">
									<a href="{{route('laboratorio.create')}}" class="btn btn-primary">Subir Exámen</a>
									<!--a href="{{url('admin/ExportarPersonal')}}" class="btn btn-success">Exportar Excel</a-->
									{!! Form::open(['laboratorio.index','method' =>'GET', 'class'=>'navbar-form pull-right'])!!}
										<div class="input-group">
											{!! Form::text('buscar',null,['class'=>'form-control','placeholder'=>'Buscar Exámen','aria-describedby'=>'search'])!!}
											<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
										</div>
									{!! Form::close() !!}
									<hr>
									<!--form action="ImportarPersonal" method="POST" enctype="multipart/form-data">
										{!!Form::file('file');!!}
										<input type="hidden" value="{{csrf_token()}}" name="_token">
										<button class="btn btn-warning" type="submit">Cargar Archivo</button>
									</form-->
								
							</div>
							
						</div>
						<div class="container">
								<div class="col-xs-12 col-sm-12 col-md-10 col-lg-12">
									<hr>
									<table class="table table-hover">
										<thead>
											<th class="hidden-xs">#</th>
											<th>Nombre paciente</th>
											<th>Exámen</th>
											<th class="hidden-xs hidden-sm hidden-md">Fecha</th>
											<th>Opciones</th>
										</thead>
										<tbody>

											@foreach($laboratorios as $laboratorio)
											<tr>
												<td class="hidden-xs">{{ $laboratorio->id }}</td>
												<td>{{ $laboratorio->paciente->apellido.', '.$laboratorio->paciente->nombre }}</td>
												<td>{{ $laboratorio->examen->examen }}</td>
												<td class="hidden-xs hidden-sm hidden-md">{{ $laboratorio->created_at }}</td>
											
												<td>
													<a href="{{ route('laboratorio.edit',$laboratorio->id) }}" class="btn btn-warning glyphicon glyphicon-edit"></a>

													<a href="{{ route('laboratorio.destroy',$laboratorio->id) }}" onClick="return confirm('¿Desea eliminar esta persona?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
												</td>
											</tr>
										@endforeach
										
										</tbody>
								  	</table>
								</div>
								<div class="text-center">
  									{!! $laboratorios->render() !!}
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
