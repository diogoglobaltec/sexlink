<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recado extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'id_acompanhante',
        'recado',
        'local',
        'eventoDia',

    
    
    ];
}
