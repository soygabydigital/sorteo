@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading text-dark">TABLERO</h3>
    </div>                       
      <div class="card">          
          <div class="card-header">
            <h4 style="color: #3e4095;">
              ¡Hola! <strong>{{ Auth::user()->name }},</strong> 
              Bienvenido a Sorteo</h4> 
          </div>                           
          <div class="card-body">

            <div class="row">

              <div class="col-sm-4">
                <div class="card">   
                  <div style="width: 4em; height: 4em; border-radius: 1em; margin: -1em;  background-color: #c068de; box-shadow: 1px 1px 5px;">
                      <h5 class="fa fa-venus text-light" style="padding: 1em;"></h5>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title text-dark">Femeninos: {{$fem}}</h5>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="card">   
                  <div style="width: 4em; height: 4em; border-radius: 1em; margin: -1em;  background-color: #5ab1f2; box-shadow: 1px 1px 5px;">
                      <h5 class="fa fa-mars text-light" style="padding: 1em;"></h5>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title text-dark">Masculinos: {{$mas}}</h5>
                  </div>
                </div>
              </div>
      
              <div class="col-sm-4">
                <div class="card">   
                  <div class="bg-success" style="width: 4em; height: 4em; border-radius: 1em; margin: -1em; box-shadow: 1px 1px 5px;">
                      <h5 class="fa fa-chess-queen text-light" style="padding: 1em;"></h5>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title text-dark">Empresarios: {{$empresarios}}</h5>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="card">   
                  <div style="width: 4em; height: 4em; border-radius: 1em; margin: -1em; box-shadow: 1px 1px 5px; background-color: #3e4095;">
                      <h5 class="fa fa-user text-light" style="padding: 1em;"></h5>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title text-dark">Emprendedores: {{ $emprendedores }}</h5>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="card">   
                  <div  style="width: 4em; height: 4em; border-radius: 1em; margin: -1em; box-shadow: 1px 1px 5px; background-color: #ff6600;">
                      <h5 class="fa fa-comment-dots text-light" style="padding: 1em;"></h5>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title text-dark">Otros: {{$otros}}</h5>
                  </div>
                </div>
              </div> 
              
              <div class="col-sm-4">
                <div class="card">   
                  <div class="bg-dark" style="width: 4em; height: 4em; border-radius: 1em; margin: -1em; box-shadow: 1px 1px 5px;">
                      <h5 class="fa fa-shapes text-light" style="padding: 1em;"></h5>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title text-dark">Total: {{$total}}</h5>
                  </div>
                </div>
              </div>
 

              </div><!--row-->
              <br>

          
          </div><!-- card body -->
      </div>
</section>
@endsection

