<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contador extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'contador',
        'url',
    'NumeroDeVisitas',
    'IpVisitante',
    'UltimaVisita',
    ];

    protected $table = 'contador';


}













