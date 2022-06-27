<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou a partir de 16 anos acompanhado" . PHP_EOL;


//If modelo 1
if ($idade == 18 || $idade > 18){
    echo "Você tem $idade anos.". PHP_EOL;
    echo "Pode entrar".PHP_EOL;
}else{
    echo "Você tem $idade anos.". PHP_EOL;
    echo "Não pode entrar".PHP_EOL;
}


//If modelo 2
if ($idade == 18 or $idade > 18){
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar".PHP_EOL;
}else{
    echo "Você tem $idade anos.". PHP_EOL;
    echo "Não pode entrar".PHP_EOL;
}


//If modelo 3
if ($idade >= 18){
    echo "Você tem $idade anos.". PHP_EOL;
    echo "Pode entrar".PHP_EOL;
}else{
    echo "Você tem $idade anos.". PHP_EOL;
    echo "Não pode entrar".PHP_EOL;
}

//If com else if
if ($idade >= 18){
    echo "Você tem $idade anos.". PHP_EOL;
    echo "Pode entrar sozinho".PHP_EOL;
}else if ($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar." .PHP_EOL ;
}else{
    echo "Você tem $idade anos.". PHP_EOL;
    echo "Não pode entrar".PHP_EOL;
}
