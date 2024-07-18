<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class underground extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        
        'id_acompanhante',
        'galeria',
        'statusPagamento',
        'pagoNaData',
        'iniciaAnuncio',
        'terminaAnuncio',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_acompanhante', 'id');
    }
}
