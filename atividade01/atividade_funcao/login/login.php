<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if ($usuario == 'ana' && $senha == 'Analaura_17') {
    //require "funcao.php";
    header("Location: painel.php");
    exit;
} else {
    echo "Usuário ou senha incorretos.";
    header("Location: index.php");
}
?>