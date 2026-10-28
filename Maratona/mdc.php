<?php 
$num1 = 48;
$num2 = 18;
$x = $num1;
$y = $num2;
while ($y != 0){
    $temp = $y;
    $y = $x % $y;
    $x = $temp;
}
echo "MDC de $num1 e $num2 é: $x\n";
?>php 