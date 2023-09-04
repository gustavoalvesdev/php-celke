<?php 

$result = '2';

echo "<p>";

echo "Resultado de exemplo 1: " . $result;

$result_dois = $result + 1;

echo "<br />";

echo "Resultado Exemplo 2: " . $result_dois;

$result_tres = $result_dois + 3.5;

echo "<br />";

echo "Resultado Exemplo 3: " . $result_tres;

$result_quadro = 11;

$result_cinco = (double) $result_quadro;

echo "<br />";

echo "Resultado Exemplo 5: $result_cinco";

$result_seis = 7.9;

$result_sete = (int) $result_seis;

echo "<br />";

echo "Resultado Exemplo 7: " . $result_sete;

echo "</p>";
