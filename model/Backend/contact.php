<?php

namespace App\model\Backend;

/* class contact qui permet de recuperer les propriétés et methodes qui nous crée ces objets séparer de son fichier DAO associé pour plus de sécurités */


class contact
{
    /**
     * @var string
     */
    private $Nom;
    /**
     * @var string
     */
    private $Prénom;

    /**
     * @var string
     */
    private $Mail;
    /**
     * @var string
     */
    private $Téléphone;
    /**
     * @var string
     */
    private $Departement;


    /**
     * @param string $Nom
     */
    public function SetNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }
    /**
     * @param string $Prénom
     */
    public function setPrénom($Prénom)
    {
        $this->Prénom = $Prénom;
    }

    /**
     * @return string
     */
    public function getPrénom()
    {
        return $this->Prénom;
    }
    /**
     * @param string $Mail
     */
    public function setMail($Mail)
    {
        $this->Mail = $Mail;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param string $Téléphone
     */
    public function setTéléphone($Téléphone)
    {
        $this->Téléphone = $Téléphone;
    }

    /**
     * @return string
     */
    public function getTéléphone()
    {
        return $this->Téléphone;
    }

        /**
     * @param string $Departement
     */
    public function setDepartement($Departement)
    {
        $this->Departement = $Departement;
    }

    /**
     * @return string
     */
    public function getDepartement()
    {
        return $this->Departement;
    }
}
