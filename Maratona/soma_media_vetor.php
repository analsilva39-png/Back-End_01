<?php 
$notas = [8.5, 7.0, 9.5, 6.0];
$somaNotas = array_sum($notas);
$media = $somaNotas / count($notas);
echo "Soma: $somaNotas | Media: $media\n";
?>php