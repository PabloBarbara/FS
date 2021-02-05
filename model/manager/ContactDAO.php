<?php

namespace App\model\manager;

use App\model\Backend\contact;
use App\model\Parameter;

class ContactDAO extends DAO
{
    /* fonction buildObject qui nous permet de convertir chaque champ de la table en propriété de notre objet */
    /* row = ranger */

    private function buildObject($row)
    {
        $contact = new contact();
        $contact->setNom($row['Nom']);
        $contact->setPrénom($row['Prénom']);
        $contact->setMail($row['Mail']);
        $contact->setTéléphone($row['Téléphone']);
        $contact->setDepartement($row['Departement']);
        return $contact;
    }

    public function ajoutMessage(Parameter $post)
    {
        $sql = 'INSERT INTO contact (Nom, Prénom, Mail, Téléphone, Departement) VALUES (?, ?, ?, ?, ?)';
        $this->createQuery($sql, [$post->get('Nom'), $post->get('Prénom'), $post->get('Mail'), $post->get('Téléphone'),$post->get('Departement')]);
    }

}
