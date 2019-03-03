<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';
    //Desactivamos la fecha de creacion y actualizacion automatica
    public $timestamps=false;
    //Columnas de la tabla
    protected $fillable = ['id','description', 'price'];
}
