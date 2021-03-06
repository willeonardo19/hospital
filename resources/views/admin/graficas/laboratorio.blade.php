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
					<div class="panel-heading">Laboratorio</div>
						{!! Form::open(['url'=>'admin/estadisticalaboratorio','method'=>'POST']) !!}	  
							
							<div class="form-group col-md-4">
								{!! Form::label('title','Filtrar')!!}
								{!! Form::select('consulta',['examen'=>'Exámen','dia'=>'Día','mes'=>'Mes'],null,['class'=>'form-control select-tipo','placeholder'=>'Seleccione Filtro']) !!}
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<a href="{{ url('admin/estadisticalaboratorio') }}" class="btn btn-warning">Cancelar</a>	
									{!! Form::submit('Filtrar',['class'=>'btn btn-primary'])!!}
								</div>
							</div>
								
						{!! Form::close() !!}	
					<hr>
					<div class="panel-body">
						{!! Charts::assets() !!}
						{!! $chart->render() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
<script src="{{asset('assets/bootstrap/js/dropdown.js')}}"></script>
	<script>
		$('.select-tipo').chosen({
			placeholder_text_single:'Seleccione rol',
			no_results_text: 'No se encontro resultados para el rol '
		});
		
	</script>
@endsection