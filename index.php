<?php 

$a = 2;
$b = 4;
$c = 7;

$result_soma = $a + $b;
echo "Soma: $result_soma<br /><br />";

$result_subtracao = $c - $b;

echo "Subtracao: $result_subtracao<br /><br />";

$result_multiplicacao = $c * $a;

echo "Multiplicacao: $result_multiplicacao<br /><br />";

$result_divisao = $b / $a;

echo "Divisão: " . $result_divisao . "<br /><br />";

$result_resto = $c % $a;

echo "Resto: $result_resto<br /><br />";

try {
    $result_divisao = $b / 3;

    echo "Divisão por Zero: " . $result_divisao . "<br /><br />";
} catch(DivisionByZeroError $e) {
    echo "Divisão por Zero: Erro " . $e->getMessage() . "<br /><br />";
}

$cc = 38564.32;
echo "Valor na conta corrente: R$ " . number_format($cc, 2, ',', '.') . "<br /><br />";

$debito = 200.16;
echo "Valor do débito: R$ " . number_format($debito, 2, ',', '.') . "<br /><br />";

$result_real = $cc - $debito;

echo "Saldo: R$ " . number_format($result_real, 2, ',', '.') . "<br><br>";
