<?php

$peso = 80;
$altura = 1.90;

$imc = number_format($peso / ($altura ** 2), 2, '.', '');

if ($imc < 18.5){
    echo "O IMC de $imc está abaixo do ideal.";
}else if ($imc > 24.9){
    echo "O IMC de $imc está acima do ideal.";
}else{
    echo "O IMC de $imc está dentro do ideal.";
}