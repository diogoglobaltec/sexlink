<?php

namespace App\Sevices;

use DB;

/**
 * @author z3r0
 */

//contar total de visitas únicas
//total de visitas únicas por data / dia-mes-ano
//total de visitas únicas por página


class VisitanteService
{
    public function VisitanteService(){
      $ContaVisitaUnica = DB::table('shetabit_visits')
    ->distinct()
    ->count('ip');




    return  $ContaVisitaUnica;
    }
}


