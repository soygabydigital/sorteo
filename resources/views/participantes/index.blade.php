@extends('layouts.app')

@section('datatable_css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/Datatables/dataTables.bootstrap5.min.css') }}">
@endsection

@section('content')

    <section class="section">

        <div class="section-body"> 
			<div class="section-header">
				<h4 class="page__heading text-dark">PARTICIPANTES </h4>
			</div>

			<div style="display: inline-block; width: 35rem; ">
				@if (session()->has('message'))
				<div wire:poll.4s class="alert alert-light" style="margin-top:0px; margin-bottom:0px; width: 180%;"> {{ session('message') }} </div>
				@endif			
			<br><br>
	 
			</div>

			<div class="section-body"> 

				<div class="row">
					<div class="col-lg-12">
						<div class="card">

							
							<div class="card-body">

								<div class="col-1" style="float: left;">
									<a class="btn btn btn-sm text-light" style="width: 5rem; background-color: #3e4095;"href="{{ route('participantes.create')}}" title="Nuevo Participante">
										<i class="fa fa-plus" aria-hidden="true"></i> Nuevo</a>							
								</div>  
								
								<div class="col-1" style="float: left;">
									<a class="btn btn-secondary btn-sm text-dark" style="width: 7rem;"href="{{ route('sortear')}}" title="Sortear Web">
										<i class="fa fa-bullhorn" aria-hidden="true"></i> Sortear Web</a>							
								</div> 
								<br><br>
							  <div class="table-responsive">
								<table id="participantes" style="width: 100%;" class="table-sm table-striped mt-2 text-center">
									<thead class="thead text-light" style="background: #3e4095;">
										<tr>
											<th class="text-center">Username</th>
											<th class="text-center">Nombres</th>								
											<th class="text-center">Género</th>								
											<th class="text-center">Nicho</th>
											<th class="text-center">Tipo</th>
											<th class="text-center">Residencia</th>
											<th class="text-center">Inversion</th>
											<th class="text-center">Acción</th>
										</tr>
									</thead>

									<tbody>									
									@foreach($participantes as $participante)
 
										<tr class="text-dark">										
									
											<td>{{ $participante->username }}</td>
											<td>{{ $participante->nombres }}</td>

											@if($participante->genero==1)
												<td>Femenino</td>						
											@elseif($participante->genero==2)
												<td>Masculino</td>	
											@endif

											<td>{{ $participante->nicho }}</td>


											@if($participante->tipo==1)
												<td>Empresario(a)</td>						
											@elseif($participante->tipo==2)
												<td>Emprendedor(a)</td>	
											@elseif($participante->tipo==3)
												<td>Otro</td>
											@endif


											<td>{{ $participante->residencia }}</td>

											@if($participante->inversion==1)
												<td></td>						
											@elseif($participante->inversion==2)
												<td>Sí</td>	
											@elseif($participante->inversion==3)
												<td>No</td>
											@endif

										
											<td width="110" class="text-center">
												 		 						
												<a style="float: left; background-color: #ff6600;" class="btn btn-sm text-light" title="Editar Participante" href="{{ route('participantes.edit',$participante->id)}}">
													<i aria-hidden="true"></i> Editar</a>  
													{!! Form::open(['method'=>'DELETE','route'=>['participantes.destroy',$participante->id],'style'=>'display:inline']) !!}
													{!! Form::submit('Borrar', ['class'=>'btn btn-secondary text-dark btn-sm', 'style'=>'float: right;']) !!}   
													{!! Form::close() !!}
											</td>
										</tr>
										@endforeach
										
									</tbody>

								</table>

							</div><!--table-responsive-->
						</div><!--card-body-->
					</div><!--card-->
				</div><!--col-lg-12-->
			</div><!--row-->	
		</div><!-- section body -->

	    </section>	

		@section('datatable_js')
		<script type="text/javascript" src="{{ asset('assets/Datatables/jquery.dataTables.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/Datatables/dataTables.bootstrap5.min.js') }}"></script>

		<script>
		$(document).ready(function () { 
			$('#participantes').DataTable();
		});
		</script>
		@endsection

@endsection 

