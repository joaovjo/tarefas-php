<?php

include("Circulo.php");

$circulo = new Circulo(0,0,0);

$circulo->_X = 3;
echo "X: " . $circulo->_X;
echo "<br>";

$circulo->_Y = 2;
echo "Y: " . $circulo->_Y;
echo "<br>";

$circulo->_Radio = 2;
echo "Radio: " . $circulo->_Radio;
echo "<br>";

echo "Area: " . $circulo->Area();
echo "<br>";

$circulo->Mover(2, 3);
echo "Mover: X= " . $circulo->_X . ", Y= " . $circulo->_Y;
echo "<br>";

$circulo->Inflar(10);
echo "Inflar: " . $circulo->_Radio;
echo "<br>";

$circulo->Desinflar(5);
echo "Desinflar: " . $circulo->_Radio;