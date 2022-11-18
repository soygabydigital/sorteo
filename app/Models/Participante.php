<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    public $timestamps = true;
    protected $table = 'participantes';
    protected $fillable = ['username','nombres','genero','nicho', 'tipo', 'residencia'];
}
 