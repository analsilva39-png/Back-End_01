<?php 
if (isset($_POST['texto'])) {
    $texto = strtolower ($_POST['texto']);
    $vogais = 0;
    
    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], ['a', 'e', 'i', 'o', 'u'])){
            $vogais++;
        }
    }
    
    echo "A quantidade de vogais é: $vogais";
}
?>