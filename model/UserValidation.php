<?php

namespace App\model;
use App\model\Parameter;

class UserValidation extends Validation
{
    private $erreurs = [];
    private $constraint;

    public function __construct()
    {
        $this->constraint = new Constraint();
    }

    public function check(Parameter $post)
    {
        foreach ($post->all() as $key => $value) {
            $this->checkField($key, $value);
        }
        return $this->erreurs;
    }

    private function checkField($name, $value)
    {
        if($name === 'pseudo') {
            $erreur = $this->checkPseudo($name, $value);
            $this->addError($name, $erreur);
        }
        elseif ($name === 'password') {
            $erreur = $this->checkPassword($name, $value);
            $this->addError($name, $erreur);
        }
    }

    private function addError($name, $erreur) {
        if($erreur) {
            $this->erreurs += [
                $name => $erreur
            ];
        }
    }

    private function checkPseudo($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('pseudo', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('pseudo', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 255)) {
            return $this->constraint->maxLength('pseudo', $value, 255);
        }
    }

    private function checkPassword($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('password', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('password', $value, 2);
        }
        if($this->constraint->maxLength($name, $value, 255)) {
            return $this->constraint->maxLength('password', $value, 255);
        }
    }
}