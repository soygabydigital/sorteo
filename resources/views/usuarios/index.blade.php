@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h4 class="page__heading text-dark">USUARIOS</h4>
        </div>

        <div style="display: inline-block; width: 35rem; ">
            @if (session()->has('message'))
            <div wire:poll.4s class="alert alert-secondary" style="margin-top:0px; margin-bottom:0px; width: 180%;"> {{ session('message') }} </div>
            @endif			
        <br><br>
          
            
        </div>


        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card"> 


                        <div class="card-body">

                            @can('crear-user')
                            <div class="col-2" style="float: left;">
                                <a class="btn btn btn-sm text-light" style="width: 5rem; background-color: #3e4095;"href="{{ route('usuarios.create')}}" title="Nuevo Grupo">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Nuevo</a>							
                            </div>                             
                            @endcan	<br> <br>
                       
                            <table style="width: 100%;" class="table-sm table-striped mt-2 text-center">
                                <thead class="thead text-light" style="background: #3e4095;">
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">E-mail</th>
                                    <th style="color:#fff;">Rol</th>
                                    <th style="color:#fff;">Acciones</th> 
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                    <tr class="text-dark">
                                        <td style="display: none"> {{ $usuario->id }} </td>
                                        <td> {{ $usuario->name }} </td>
                                        <td> {{ $usuario->email }} </td>

                                        <td>
                                            @if (!empty($usuario->getRoleNames()))
                                                @foreach ($usuario->getRoleNames() as $rolName)
                                                    <h5><span class="badge badge-primary"> {{ $rolName }} </span></h5>
                                                @endforeach                                                
                                            @endif
                                        </td>

                                        <td>
                                             @if ($usuario->id!=0) 
                                            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn text-light" style="background-color: #ff6600;">Editar</a>                                            
                                            {!! Form::open(['method'=>'DELETE','route'=>['usuarios.destroy',$usuario->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Borrar', ['class'=>'btn btn-secondary text-dark']) !!}   
                                            @endif                                      
                                         

                                            {!! Form::close() !!}
                                        </td>
                                    </tr>                                        
                                    @endforeach
                                </tbody>
                            </table>

                        <div class="pagination justify-content-end">
                            {!! $usuarios->links() !!}
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
@endsection
