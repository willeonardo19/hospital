@extends('layouts.app')

@section('htmlheader_title')
	Registro de Examen
@endsection

@section('contentheader_title')
	
@endsection
@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-primary">
					<div class="panel-heading">Nuevo Exámen </div>

					<div class="panel-body">
						<div class="container">
							<div class="row">
									{!! Form::open(['route'=>'pacientes.store','method'=>'POST']) !!}	  
								<div class="form-group col-md-6">
									{!! Form::label('title','Código paciente')!!}
									{!! Form::number('cod_paciente',null,['class'=>'form-control','placeholder'=>'Código paciente','required']) !!}
								</div>
								<div class="form-group col-md-6 ">
									{!! Form::label('title','DPI')!!}
									{!! Form::number('dpi',null,['class'=>'form-control','placeholder'=>'Dpi']) !!}
								</div>
								
								<div class="col-md-12">
									<div class="form-group">
										<a href="{{ url('admin/pacientes') }}" class="btn btn-warning">Cancelar</a>	
										{!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
									</div>
								</div>


								
							{!! Form::close() !!}	
								
								
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
