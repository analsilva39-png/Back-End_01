<?php
$vetor = [64, 34, 25, 12, 22, 11, 90];
$tam = count ($vetor); 
for ($i = 0; $i < $tam - 1; $i++){
    for ($j = 0; $j < $tam - $i - 1; $j++){
        if ($vetor [$j] > $vetor [$j + 1]){
            $temp = $vetor [$j];
            $vetor[$j] = $vetor[$j +1];
            $vetor[$j + 1] = $temp;
        }
    }
}
echo "Vetor ordenado: " . implode(",", $vetor) . "\n";
?>