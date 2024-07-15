<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'id_acompanhante',
        'telefone',
        'estado',
        'cidade',
        'regiao',
        'bairro',
        'rua',
        'numero',
      
    ];


 

}


