<?php

namespace App\controller\Backend;

use App\controller\Controller;
use App\model\manager\ContactDAO;
use App\model\Parameter;

class BackController extends Controller
{
    protected $vue;
    protected $ContactDAO;

    /* si le formulaire de soumission est "submit" on instancie l'objet ChapitreDAO puis on appel la fonction ajouterchapitre dans le fichier ChapitreDAO.php
    et on ramenne l'utilisateur a la page ajouter_chapitre*/

    public function ajoutMessage($post)
    {
        if ($post->get('submit')) {
            $ContactDAO = new ContactDAO();
            $this->ContactDAO->ajoutMessage($post);
            $this->session->set('envoyer_message', 'Votre message a été transmis a Jean Forteroche');
            header('Location: index.php?route=accueil');
        }
        return $this->vue->rendue('rejoindre', [
            'post' => $post
        ]);
    }
    /* on appel la fonction recupChapitre du fichier ChapitreDAO.php et si le formulaire de soumission est "submit" on appel la fonction modifierChapitre dans le fichier ChapitreDAO.php
    puis on ramenne l'utilisateur a la page admin*/
}
