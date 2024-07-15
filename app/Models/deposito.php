<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deposito extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'nome',
    ];


    public function umpara()
    {
    return $this->hasMany(lixo::class,'deposito_id','id');
    }
}
