<?php //Inicia o código PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o método de envio do formulário é POST
    $n1 = $_POST['n1']; // recebe o valor do formulário1
    $n2 = $_POST['n2']; // recebe o valor do formulário2
    $n3 = $_POST['n3']; // recebe o valor do formulário3


    //Linha 3 declaro a função, recebe 4 parâmetros
    function Media($n1, $n2, $n3)
    {
        // Aqui dentro é executado os comandos a função {}
        if(isset($n1) || isset($n2) || isset($n3)){
        $media = ($n1 + $n2 + $n3) / 3;
        echo "<h3> Cálculo da Média </h3>";
        echo "A média das notas.";
        echo "----------------------------------";
        echo "Nota 1: " . $n1 . "<br>";
        echo "Nota 2: " . $n2 . "<br>";
        echo "Nota 3: " . $n3 . "<br>";
        echo "----------------------------------";
        echo "Média é: $media <br>";
        echo "----------------------------------";
    }
}
    // Na linha 8 chamamos a função e passamos os valores para os parâmetros
    media($n1,$n2,$n3);

} else {
    echo "Nenhuma nota foi fornecida.";
}

?>