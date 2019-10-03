<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    
    protected $table = "conductores";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'correo', 'domicilio','telefono'
    ];
}
