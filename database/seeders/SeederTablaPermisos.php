<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    
    public function run()
    {
        $permisos=[
            
           //Tabla Roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',            
            //Tabla Users
            'ver-user',
            'crear-user',
            'editar-user',
            'borrar-user',
            //Tabla Participantes
            'ver',
            'crear',
            'editar',
            'borrar',

        ];

        foreach ($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
