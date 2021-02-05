<?php

namespace App\controller\Frontend;

use App\controller\Controller;
use App\model\Parameter;


class rejoindreController extends Controller
{

    /* cette fonction retourne la vue rejoindre */ 


    public function rejoindre()
    {
        return $this->vue->rendue('rejoindre', [

        ]);
    }
    public function ajoutMessage(Parameter $post, $contact)
    {
        if ($post->get('submit')) {
            $this->ContactDAO->ajoutMessage($post, $contact);

            header('Location: index.php?route=rejoindre');
        }
    }
}
