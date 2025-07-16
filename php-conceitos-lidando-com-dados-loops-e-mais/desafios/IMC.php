<?php
// IMC = peso / (altura x altura)
$altura = 1.78;
$peso = 80;
$imc = $peso / $altura ** 2;

echo "O IMC para uma pessoa com $peso.Kg e $altura.M equivale a $imc" . PHP_EOL;

if ($imc < 18) {
    echo "IMC abaixo do ideal.";
} elseif ($imc < 25) {
    echo "IMC dentro do ideal.";
} else {
    echo "IMC acima do ideal.";
}
