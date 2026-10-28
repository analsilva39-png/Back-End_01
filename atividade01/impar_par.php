<?php
function parOuImpar($num) {
    if ($num % 2 == 0){
        return "Par";
    } else {
        return "Impar";
    }
}
echo parOuImpar(7);
?>