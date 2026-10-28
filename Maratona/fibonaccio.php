<?php 
$termos = 10;
$a = 0;
$b = 1;
echo "Fibonacci: $a $b";
for ($i = 3; $i <= $termos; $i++) {
    $c = $a + $b;
    echo "$c ";
    $a = $b;
    $b = $c;
}
echo "\n"
?>