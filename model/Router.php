<?php

namespace App\model;

use App\controller\Frontend\accueilController;
use App\controller\Frontend\manifesteController;
use App\controller\Frontend\nousController;
use App\controller\Frontend\rejoindreController;
use App\controller\Backend\BackController;
use App\model\Parameter;
use App\model\Request;
use Exception;

class Router
{
    private $backController;
    private $manifesteController;
    private $nousController;
    private $rejoindreController;
    private $accueilController;
    private $requete;

    /* construction des objets lié aux différents controller gerant l'affichage des pages dans la base.php du site */

    public function __construct()
    {
        $this->accueilController = new accueilController();
        $this->manifesteController = new manifesteController();
        $this->nousController = new nousController();
        $this->rejoindreController = new rejoindreController();
        $this->backController = new BackController();
        $this->request = new Request();
    }

    public function router()
    {
        $route = $this->request->getGet()->get('route');
        try {
            if (isset($_GET['route'])) {
                if ($route === 'accueil') {
                    $this->accueilController->index();
                } elseif ($route === 'ajoutMessage') {
                    $this->backController->ajoutMessage($this->request->getPost());
                } elseif ($route === 'manifeste') {
                    $this->manifesteController->manifeste();
                } elseif ($route === 'nous') {
                    $this->nousController->nous();
                } elseif ($route === 'rejoindre') {
                    $this->rejoindreController->rejoindre();
                } else {
                    echo 'page inconnue';
                }
            } else {
                $this->accueilController->index();
            }
        } catch (Exception $e) {
            echo 'Erreur';
        }
    }
}
