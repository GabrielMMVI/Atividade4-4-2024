<?php
$altura = readline("Digite sua altura: ");
$peso = readline("Digite seu peso: ");
$imc = $peso / ($altura*2);

$imcvalores = [
    18.5 => "Abaixo do peso",
    24.9 => "Peso normal",
    29.9 => "Sobrepeso",
    34.9 => "Obesidade grau I",
    39.9 => "Obesidade Nível II",
    40.0 => "Obesidade Nível III" ];
foreach($imcvalores as $senha => $value){
    if($senha < 40.0){
        if($imc <= $senha){
            echo PHP_EOL."$value";
            break;
        }
    }else{
        echo PHP_EOL."$value";
    }
}