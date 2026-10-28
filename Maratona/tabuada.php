<?php 
$tabuada = $_GET["tabuada"]??'';
for($i = 1; $i <= 20; $i++){
    $resultado = $tabuada = $i;
    echo $tabuada . "x" . $i . $resultado. "<br>";
}
?>