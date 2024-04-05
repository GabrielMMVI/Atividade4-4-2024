<?php
function bubbleSort($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}
$input = readline("Digite a sua lista de números separados por virgula: ");
$array = explode(",", $input);
$array = array_map('intval', $array);
echo "Array antes de ser organizado por Bubble Sort".PHP_EOL;
echo implode(", ", $array).PHP_EOL;
$arrayBubbleSort = bubbleSort($array);
echo "Array após de ser organizado pelo Bubble Sort:".PHP_EOL;
echo implode(", ", $arrayBubbleSort).PHP_EOL;
?>
