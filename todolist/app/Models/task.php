<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;
    /* $fillable conjunto de datos que nos permite interactuar con
    la base de datos, que unicamente nos va insertar el nombre de la tarea*/
    protected $fillable=[
        'task'
    ];
}
