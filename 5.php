
<?php

{
    $numeroAleatorio = rand(1, 100);
    $gameLoop = true;

    while($gameLoop) {
        $chute = readline("Digite um valor: ");
        $chute++;

        if ($chute < $numeroAleatorio) {
            echo "Tente novamente o numeral é maior !\n";

        } elseif ($chute > $numeroAleatorio) {
            echo "Tente novamente o numeral é menor!\n";
        } else {

            break;
        }
    }
}
