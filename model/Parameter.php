<?php

namespace App\model;

class Parameter
{
    private $parameter;
    /* construction de l'objet parameter */

    public function __construct($parameter)
    {
        $this->parameter = $parameter;
        
    }

    public function get($name)
    {
        if(isset($this->parameter[$name]))
        {
            return $this->parameter[$name];
        }
    }
    
    public function set($name, $value)
    {
        $this->parameter[$name] = $value;
    }
    
    public function all()
    {
        return $this->parameter;
    }
}