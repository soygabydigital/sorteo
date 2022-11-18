@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading text-dark">NUEVO PARTICIPANTE</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card"> 
                        <div class="card-body">
                         
                           
 
                            {!! Form::open(array('route'=>'participantes.store','method'=>'POST')) !!}
                                <div class="row">

                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="username">Username<b class="text-danger">*</b></label>
                                            {!! Form::text('username',null,array('class'=>'form-control text-dark'))  !!}
                                            @error('username') <span class="error text-danger">{{ $message }}</span> @enderror        
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6"> 
                                        <div class="form-group">
                                            <label for="nombres">Nombres<b class="text-danger">*</b></label>
                                            {!! Form::text('nombres',null,array('class'=>'form-control text-dark'))  !!}
                                            @error('nombres') <span class="error text-danger">{{ $message }}</span> @enderror        
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4"> 
                                        <div class="form-group">
                                            <label for="genero">Género</label>
                                            <select name="genero" id="genero" class="form-control">
                                                <option value="1">Femenino</option>
                                                <option value="2">Masculino</option>
                                            </select>
                                        </div>
                                    </div>
                       
                                
                                    <div class="col-xs-4 col-sm-4 col-md-4"> 
                                        <div class="form-group">
                                            <label for="nicho">Nicho<b class="text-danger">*</b></label>
                                            {!! Form::text('nicho',null,array('class'=>'form-control text-dark'))  !!}
                                            @error('nicho') <span class="error text-danger">{{ $message }}</span> @enderror        
                                        </div>
                                    </div> 

                                    <div class="col-xs-4 col-sm-4 col-md-4"> 
                                        <div class="form-group">
                                            <label for="tipo">Tipo<b class="text-danger">*</b></label>
                                            <select name="tipo" id="tipo" class="form-control">
                                                <option value="1">Empresario(a)</option>
                                                <option value="2">Emprendedor(a)</option>
                                                <option value="3">Otro</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>  

                                <div class="col-xs-12 col-sm-12 col-md-12"> 
                                    <div class="form-group">
                                        <label for="residencia">Residencia</label>
                                        {!! Form::text('residencia',null,array('class'=>'form-control text-dark'))  !!}
                                        @error('residencia') <span class="error text-danger">{{ $message }}</span> @enderror        
                                    </div>
                                </div> 
                                
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        {!! Form::submit('Guardar', $attributes = ['class'=>'button btn text-light', 'style'=>'background-color: #ff6600;']) !!}
                                    </div>
                                </div>



                               
                            {!! Form::close() !!} 

                            
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
@endsection

