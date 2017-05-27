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
					<div class="panel-heading">Sigsa</div>

					<div class="panel-body">
						<div class="container">
							<div class="row">
							@if(!isset($_GET['mes']))		
								<!--a href="{{url('admin/ExportarPersonal')}}" class="btn btn-success">Exportar Excel</a-->
								{!! Form::open(['route'=>'reportes.index','method'=>'GET','files'=>true]) !!}	  
								<div class="form-group col-md-6">
									{!! Form::label('title','Mes')!!}
									{!!Form::select('mes',$meses,null,['class'=>'form-control select-mes','required']) !!}
								</div>
								<div class="form-group col-md-6">
									{!! Form::label('title','Año')!!}
									{!!Form::select('año',$años,null,['class'=>'form-control select-mes','required']) !!}
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
										<!--a href="{{ url('admin/laboratorio') }}" class="btn btn-warning">Cancelar</a-->	
										{!! Form::submit('Generar',['class'=>'btn btn-primary'])!!}
									</div>
								</div>
							

								
								{!! Form::close() !!}	
										
							@endif	
							@if(isset($_GET['mes']))
							<h4>Registro Diario de Consulta Sigsa 3H</h4>	
							@endif
							</div>
							<div class="container">
								<div class="col-xs-12 col-sm-12 col-md-10 col-lg-12">
									<hr>
									
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
		$('.select-mes').chosen({
			placeholder_text_single:'Seleccione Paciente',
			no_results_text: 'No se encontro resultados para '
		});
		
	</script>
@endsection