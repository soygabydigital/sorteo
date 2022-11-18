<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;

Route::get('/', function () {
    return view('auth.login'); 
});

Route::get('/home', [DashboardController::class,'index'])->name('home');
Auth::routes();

Route::group(['middleware'=>['auth']],function(){  
 
    //Route::get('dashboard/{id}/detalles', [DashboardController::class, 'detalles'])->name('dash');

    Route::get('sortear',[ParticipanteController::class,'sortear'])->name('sortear');  
  
    Route::resources([
        'participantes' => ParticipanteController::class, 
        'usuarios' => UsuarioController::class,
        'roles' => RolController::class, 
    ]);    
 
});

