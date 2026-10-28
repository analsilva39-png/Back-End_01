<form method="GET" action="post_get_mesma_pagina.php">
   cor: <br>
   <input type="text" name= "cor" value=""> <br>
   tipo: <br>
   <input type="text" name= "tipo" value=""> <br>
   <input type="submit" value="Cadastrar"> <br>
</form>

<?php
    $cor = $_POST['cor'] ?? "";
    $tipo = $_POST['tipo'] ?? "";
    $produto = $_GET['produto'] ?? "(não selecionado)";
    echo "A cor do $produto é $cor do tipo $tipo";

    if (isset($_POST["cor"])){
        echo "a cor do $produto é $cor do tipo $tipo";
    }
?>