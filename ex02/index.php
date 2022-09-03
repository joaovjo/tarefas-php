<?php

  include("Empregados.php");

//Passando os dados antes de instanciar a classe, se receber dados de formulario usar isso
$nome = "Julia";
$ultimoNome = "Souza";
$salario = -1500;

$Empregado = new Empregados($nome, $ultimoNome, $salario);

//Passando os dados após instanciar a classe
//$Empregado = new Empregados("", "", 12000);

//$Empregado->_primeiroNome = "Giovanna";
//$Empregado->_sobrenome = "Silva";
//$Empregado->_salarioMensal = 1200.00;

//Exibe Dados do empregado
echo "<p>Dados Empregado:</p>";
echo "<ul>";
  echo "<li>Primeiro Nome: ". $Empregado->_primeiroNome . "</li>";
	echo "<li>Sobrenome: ". $Empregado->_sobrenome . "</li>";
  echo "<li>Salario Mensal: R$ " . number_format($Empregado->_salarioMensal,2,",",".") . "</ul>";
echo "</ul>";

  echo "<p>Salario Anual do Empregado: </p>";
  echo "<ul>";
  echo "<li> Total: " . number_format($Empregado->salarioAnual(),2,",",".") . "</li>";
  echo "</ul>";

echo "<p>Salario com Aumento: </p>";
  echo "<ul>";
  echo "<li>Com 10% de aumento: R$ " . number_format($Empregado->salarioAumento(),2,",","."). "</li>";
  echo "</ul>";