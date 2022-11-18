@extends('layouts.app')

@section('datatable_css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/Datatables/dataTables.bootstrap5.min.css') }}">
@endsection

@section('content')

    <section class="section">

        <div class="section-body"> 
			<div class="section-header">
				<h4 class="page__heading text-dark">SORTEO </h4>
			</div>



      


			<div class="section-body"> 
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
            <h1 class="text-center" style="color: #3e4095;"> <b>GANADOR</b> </h1><hr>
            @foreach ($participantes as $participante)
            <h3 class="text-center text-dark">¡Felicidades, {{$participante->username}}!</h3>
            <h2 class="text-center" style="color: #ff6600;">{{$participante->nombres}}</h2>
            <h5 class="text-center text-dark">{{$participante->nicho}}</h5>
            <br>
            <h4 class="text-center" style="color: #3e4095;"> Te ganaste una GitHub Page</h4>


            @endforeach

	    </section>	 


@endsection 



 