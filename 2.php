<?php
function calcDivisores($numero) {
    $divisores = array();

    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            $divisores[] = $i;
        }
    }
    $divisores[] = $numero;

    return $divisores;
}
$numero = readline("Digite seu numero: ");
$divisores = calcDivisores($numero);
echo "Os divisores de $numero são: " . implode(", ", $divisores);
?>
