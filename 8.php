<?php

function cowsay($mensagem)
{
    $cow = "
  ----------------
< $mensagem >
  ----------------
         \\   ^__^
          \\  (oo)\\___
             (__)\\       )\\/\\
                 ||----w |
                 ||     ||
";

    echo $cow;
    if ($mensagem = 0){
        echo $mensagem;
    }
}
$mensagem = readline("Digite o que a vaquinha vai falar: ");
cowsay($mensagem);