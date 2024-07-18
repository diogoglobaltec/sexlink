<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;
use Illuminate\Http\Request;
use Coderflex\Laravisit\Models\User;




class acompanhante extends Model implements CanVisit
{
    use HasFactory, HasVisits;







    protected $fillable=

           ['Genero',
            'valor',
            'idade',
            'OralSemCamisa',
            'FinalizaOral',
            'DuplaPenetracao',
            'Anal',
            'Grupal',
            'Lesbianismo',
            'ChuvaDourada',
            'Filma',
            'Fotografa',
            'Viaja',
            'descricao',
            'username',
            'id_acompanhante'];



protected $hidden = [
'password',

];





            public function user()
{
    return $this->belongsTo(User::class, 'id_acompanhante', 'id');
}

}

