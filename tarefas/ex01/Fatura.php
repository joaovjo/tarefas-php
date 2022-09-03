<?php

class Fatura
{

	public $id_produto;
	public $descricao;
	public $qtdeComprada;
	public $precoUnitario;
	public $valorFatura;

	//Atributos são passados como um array para o objeto DadosCompra  
	public $DadosCompra;

	//Construtor com lista dos dados da compra
	public function __construct($atributosInvoice)
	{
		$this->id_produto = $atributosInvoice[0];
		$this->descricao = $atributosInvoice[1];
		$this->qtdeComprada = $atributosInvoice[2];
		$this->precoUnitario = $atributosInvoice[3];

		//Atributos juntos	
		$this->DadosCompra = $atributosInvoice;
	}

	//Set - Define uma informação no objeto
	public function __set($atributo, $valor)
	{
		$this->$atributo = $valor;
	}

	//Get - verifica informação no objeto
	public function __get($atributo)
	{
		return $this->$atributo;
	}

	//pegaValorFatura
	public function pegaValorFatura()
	{
		return $this->qtdeComprada * $this->precoUnitario;
	}
}
