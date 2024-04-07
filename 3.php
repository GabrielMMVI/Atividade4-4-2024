<?php
function calcMedia($sequencia)
{
   $soma = array_sum($sequencia);
   $quantidade = count($sequencia);
   $media = $soma / $quantidade;
   return $media;
}
$entrada = readline("Digite uma sequencia de números separada por vírgula: ");
$sequencia = explode(",", $entrada);
$sequencia = array_map('trim', $sequencia);
$media = calcMedia($sequencia);

echo "A média da sua sequência é:  $media \n";
