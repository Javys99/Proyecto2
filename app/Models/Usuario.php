<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
        protected $fillable = [
        'nombre',
        //'apellido_paterno',
        //'apellido_materno',
        //'correo'
        ];

        public function perros(){
            return $this->belongsTo(Usuario::class);

        }
}
