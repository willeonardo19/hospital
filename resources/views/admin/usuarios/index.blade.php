@extends('layouts.app')

@section('htmlheader_title')
	Usuarios
@endsection

@section('contentheader_title')
	
@endsection
@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-primary">
					<div class="panel-heading">Usuarios</div>

					<div class="panel-body">
						<div class="container">
							<div class="row">
								<a href="{{route('usuarios.create')}}" class="btn btn-primary">Agregar Usuario</a>
								<a href="{{url('admin/ExportarUsuarios')}}" class="btn btn-success">Exportar Excel</a>
								{!! Form::open(['usuarios.index','method' =>'GET', 'class'=>'navbar-form pull-right'])!!}
									<div class="input-group">
										{!! Form::text('buscar',null,['class'=>'form-control','placeholder'=>'Buscar Usuario','aria-describedby'=>'search'])!!}
										<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
									</div>
								{!! Form::close() !!}
								<hr>
									
							</div>
							<div class="container">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								
									<hr>
									<table class="table table-responsive">
										<thead>
											<th >#</th>
											<th>Usuario</th>
											<th class="hidden-xs">Rol</th>
											<th class="hidden-xs">Asignado a</th>
											<th>Opciones</th>
										</thead>
										<tbody>
										@foreach($users as $user)
											<tr>
												<td >{{ $user->id }}</td>
												<td>{{ $user->user }}</td>
											@if($user->type=='admin')
												<td class="hidden-xs"><span class="label label-primary">{{ 'LeoSoft' }}</span></td>
											@elseif ($user->type=='administracion')
												<td class="hidden-xs"><span class="label label-info">{{ 'Administrador' }}</span></td>
											@elseif ($user->type=='laboratorio')
												<td class="hidden-xs"><span class="label label-success">{{ 'Laboratorio' }}</span></td>
											@elseif ($user->type=='doctor')
												<td class="hidden-xs"><span class="label label-danger">{{ 'Doctor' }}</span></td>
											@elseif ($user->type=='enfermera')
												<td class="hidden-xs"><span class="label label-warning">{{ 'Enfermera' }}</span></td>
											@elseif ($user->type=='secretaria')
												<td class="hidden-xs"><span class="label label-default">{{ 'Secretaria' }}</span></td>
											@elseif ($user->type=='member')
												<td class="hidden-xs"><span class="label label-info">{{ 'Equipo' }}</span></td>
											@endif
												<td class="hidden-xs">{{ $user->personal->nombre.' '.$user->personal->apellido }}</td>
												<td>
													<a href="{{ route('usuarios.edit',$user->id) }}" class="btn btn-warning glyphicon glyphicon-edit"></a>

													<a href="{{ route('usuarios.destroy',$user->id) }}" onClick="return confirm('¿Desea eliminar esta usuario?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
												</td>
											</tr>
										@endforeach
										</tbody>
								  	</table>
									</div>
								<div class="text-center">
  									{!! $users->render() !!}
								</div>
							</div>
						</div>
					</div>
				
			</div>
		</div>
	</div>
@endsection
