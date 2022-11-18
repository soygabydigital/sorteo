<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\View\View;
use Illuminate\Http\Request;



class DashboardController extends Controller
{
     public function index(){

          $fem=Participante::where('genero', '1')->count();

          $mas=Participante::where('genero', '2')->count();

          $empresarios=Participante::where('tipo', '1')->count();

          $emprendedores=Participante::where('tipo', '2')->count();

          $otros=Participante::where('tipo', '3')->count();

          $total=Participante::count();

       $participantes=['fem'=>$fem, 'mas'=>$mas, 'total'=>$total, 'empresarios'=>$empresarios, 
       'emprendedores'=>$emprendedores, 'otros'=>$otros];   

 
  
   
          return view('dash.dashboard', $participantes);   
     }
}

