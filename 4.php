<?php

function fibonacci($n)
{
    if ($n == 0)
        return 0;
    else if ($n == 1)
        return 1;
    else
        return fibonacci($n - 1) + fibonacci($n - 2);
}

echo "Estes são os primeiros 10 números da sequência numérica de Fibonacci:\n";
for ($i = 0; $i < 10; $i++) {
    echo fibonacci($i) . " ";
}