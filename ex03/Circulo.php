<?php

class Circulo{

    private $_X;
    private $_Y;
    private $_Radio;

    public function __construct($_Radio, $x, $y) 
    {
        $this->_X = $x;
        $this->_Y = $y;
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function Area() 
    { 
        return pi() * ($this->_Radio * 2); 
    }

    public function Mover($x, $y) 
    {
        $this->_X = $x;
        $this->_Y = $y;
    }

    public function Inflar($valor) 
    { 
        $this->_Radio += $valor; 
    }

    public function Desinflar($valor) 
    { 
        $this->_Radio -= $valor; 
    }

}