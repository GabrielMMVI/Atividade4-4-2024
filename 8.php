<?php

function cowsay($message)
{
    $cow = "
  ----------------
< $message >
  ----------------
         \\   ^__^
          \\  (oo)\\___
             (__)\\       )\\/\\
                 ||----w |
                 ||     ||
";

    echo $cow;
}
$message = "Eu sou uma vaquinha muuuuuuuuu, bora bill! Muuuuuuuuu!";
cowsay($message);