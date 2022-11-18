<?php

namespace App\Http\Controllers;
use App\Models\Participante;

use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver|crear|editar|borrar')->only('index');
        $this->middleware('permission:crear')->only('create, store');
        $this->middleware('permission:editar')->only('edit, update');
        $this->middleware('permission:borrar')->only('destroy');
    }

public function index()
{
    $participantes = Participante::all();
    return view('participantes.index', compact('participantes'));
}


public function create()
{
    return view('participantes.crear');
}


public function store(Request $request)
{
    $request->validate([  
        'username'=>'unique:participantes|required|max:20',
        'nombres'=>'max:40', 
        'genero'=>'max:1',
        'nicho'=>'max:20',
        'tipo'=>'max:20',
        'residencia'=>"max:50"                   
    ],
    [             
        'username.unique'=>'El nombre de usuario ya fue registrado',
        'username.required'=>'El nombre de usuario es requerido',
        'username.max'=>'Nombre usuario de máximo 20 caracteres',
        'nombres.max'=>'Nombre de máximo 40 catacteres',
        'genero.max'=>'Género de máximo 1 caracter.',
        'nicho.max'=>'nicho de máximo 20 caracteres',
        'tipo.max'=> 'Mipo de máximo 20 caracteres' ,
        'residencia.max'=>'Residencia de máximo 50 caracteres'
   ]
);    

    Participante::create($request->all());
    return redirect('/participantes')->with('message', 'El participante ha sido añadido');
}

public function edit(Participante $participante)
{
    //$participante=Participante::where('id', $id);

    return view('participantes.editar',compact('participante'));
}


public function update(Request $request, Participante $participante)
{
    $request->validate([  
        'username'=>'required|max:20',
        'nombres'=>'max:40', 
        'genero'=>'max:1',
        'nicho'=>'max:20',
        'tipo'=>'max:20',
        'residencia'=>'max:50'                         
    ],
    [             
        'username.required'=>'El nombre de usuario es requerido',
        'username.max'=>'Nombre usuario de máximo 20 caracteres',
        'nombres.max'=>'Nombre de máximo 40 catacteres',
        'genero.max'=>'Género de máximo 1 caracter.',
        'nicho.max'=>'Nicho de máximo 20 caracteres',
        'tipo.max'=> 'Tipo de máximo 20 caracteres',
        'residencia.max'=>'Residencia de máximo 50 caracteres'
   ]
); 

    $participante->update($request->all());
    return redirect('/participantes')->with('message', 'Participante ha sido editado');
}

public function destroy($id)
{
    Participante::find($id)->delete();
    return redirect()->route('participantes.index')->with('message', 'Participante ha sido eliminado');
}

public function sortear()
{
   $participantes=Participante::inRandomOrder()->limit(1)->get();
    return view('participantes/sortear', compact('participantes')
);
}

}
