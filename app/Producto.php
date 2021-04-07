<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model{

    protected $table = 'productos';

    protected $fillable = [
        'codigoProd', 
        'nombreProd',
        'descProd',
        'percioProd',
        'stokProduc',
    ];

    protected $hidden =[
        'created_at',
        'updated_at'
    ];
}
