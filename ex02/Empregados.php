<?php

class Empregados {

	private $_primeiroNome;
	private $_sobrenome;
	private $_salarioMensal;

	// Método Mágico Get
	public function __get($atributo){
		return $this->$atributo;
	}
	// Método Mágico Set
	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}

	// Construtor
	public function __construct($primeiroNome, $sobrenome, $salarioMensal)	{
    $this->_primeiroNome = $primeiroNome;
    $this->_sobrenome  = $sobrenome;
		$this->_salarioMensal = $salarioMensal < 0 ? 0 : $salarioMensal;
	}

	public function salarioAnual(){
          return $this->_salarioMensal * 12;
     }

  public function salarioAumento(){
		return $this->_salarioMensal = $this->_salarioMensal < 0 ? 0 : ($this->_salarioMensal * 0.10) + $this->_salarioMensal;
     }
}
