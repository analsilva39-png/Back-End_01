<?php 
$vetorBusca = [10, 20, 30, 40, 50];
$alvo =30;
$encontrado = false;
foreach ($vetorBusca as $indice => $valor) {
    if($valor == $alvo) {
        echo "Elemento $alvo encontrado na posição $indice.\n";
        $encontrado = true;
        break;
    }
}
if (!$encontrado) echo "Elemento não encontrado.\n";
?>php