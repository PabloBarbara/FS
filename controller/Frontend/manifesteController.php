<?php

namespace App\controller\Frontend;

use App\controller\Controller;


class manifesteController extends Controller
{

    /* cette fonction retourne la vue manifeste */ 

    public function manifeste()
    {
        return $this->vue->rendue('manifeste', [

        ]);
    }
}
