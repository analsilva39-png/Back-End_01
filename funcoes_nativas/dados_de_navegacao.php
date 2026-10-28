<?php
//Exibe informações do usuário e do servidor

echo "<h2>Informções do Acesso</h2>";

$ip = $_SERVER['REMOTE_ADDR']; //IP do usuario 
$navegador = $_SERVER['HTTP_USER_AGENT']; //Navegador e sistema operacional 
$servidor = gethostname(); //Nome do servidor 
$versaoPHP = phpversion(); //Versao do PHP instalada

echo "🚪 IP do usuario: " . $ip . "<br>";
echo "🌐 Navegador: " . $navegador . "<br>";
echo "💻 Servidor: " . $servidor . "<br>";
echo "⚙️ Versão do PHP: " . $versaoPHP . "<br>";