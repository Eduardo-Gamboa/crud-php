<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='empleados';
    protected $primaryKey='id';
    public $fillable=[
    	'id',
    	'nombre',
    	'apellidos',
    	'sexo',
        'updated_at',
        'created_at',
        'email'
    ];
}
