<?php

$a = 1;
$b = -5;
$c = 6;

$delta = ($b * $b) - (4 * $a * $c);

if ($delta < 0){
    echo "Não possui raízes reais.";
} else {
    $x1 = (-$b + sqrt($delta)) / (2 *$a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    
    echo "x1 = " . $x1 . "\n";
    echo "x2 = " . $x2 . "\n";
}
?>