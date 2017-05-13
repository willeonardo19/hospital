<?php 
$i=1 ?>
@extends('layouts.app')

@section('htmlheader_title')
	Exámenes Lab.
@endsection

@section('contentheader_title')
	
@endsection
@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-primary">
					 <div class="panel-heading">Tasas de Interés</div>
                
                <div class="panel-body">
                <div class="col-md-10 col-md-offset-1">
                @if(isset($examenes))
                    {!! Form::open(['route'=>'examen.store','method'=>'POST']) !!}
                         <div class="form-group col-md-6 ">
                            {!! Form::label('title','Nombre de Exámen')!!}
                            {!! Form::text('examen',null,['class'=>'form-control','placeholder'=>'Nombre de Exámen','required']) !!}
                        </div>   
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{route('examen.index')}}" class="btn btn-warning">Cancelar</a>
                                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                            </div>
                        </div>
                    {!! Form::close() !!}  
                    @endif
                    @if(isset($examen))
                        {!! Form::open(['route'=>['examen.update',$examen],'method'=>'PUT']) !!} 
                         <div class="form-group col-md-6 ">
                            {!! Form::label('title','Nombre de Exámen')!!}
                            {!! Form::text('examen',$examen->examen,['class'=>'form-control','placeholder'=>'Nombre de Exámen','required']) !!}
                        </div>     
                       
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{route('examen.index')}}" class="btn btn-warning">Cancelar</a>
                                {!! Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
                            </div>
                        </div>
                    {!! Form::close() !!}  
                    @endif 
                    
                </div>

                <hr>
                @if(isset($examenes))
                    <table class="table table-striped">
                        <thead>
                            <th>#</th>
                            <th>Exámen</th>
                            
                            <th>Ver</th>
                        </thead>
                        <tbody>
                        @foreach($examenes as $examen)
                            <tr>
                                <td>{{$examen->id}}</td>
                                <td>{{$examen->examen}}</td>

                                
                               
                                
                                <td><a href="{{ route('examen.index').'?id_ex='.$examen->id}}" class="btn btn-warning glyphicon glyphicon-edit"></a>
                                <a href="{{ route('examen.destroy',$examen->id)}}" onClick="return confirm('¿Desea eliminar este exámen?')" class="btn btn-danger glyphicon glyphicon-remove"></a></td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                   @endif
                </div>
                @if(isset($examenes))
                <div class="text-center">
                    {!! $examenes->render() !!}
                </div>
                @endif

				</div>
			</div>
		</div>
	</div>
@endsection
