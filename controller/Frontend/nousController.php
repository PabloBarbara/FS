<?php

namespace App\controller\Frontend;

use App\controller\Controller;


class nousController extends Controller
{

    /* cette fonction retourne la vue qui sommes-nous */ 

    public function nous()
    {
        return $this->vue->rendue('nous', [

        ]);
    }
}
