<?php
$idade = 12;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade > 18) {
    echo "Você tem $idade anos, pode entrar!";
} else {
    echo "Você tem $idade anos, não tem mais que 18 anos! Não pode entrar.";
}