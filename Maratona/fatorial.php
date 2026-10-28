<!DOCTYPE html>
<html>
<head>
    <title>Fatorial</title>
</head>
<body>
    <h2>Calcular Fatorial</h2>
    <form method = "POST">
    Digite um numero:
    <input type="Number" name="numero" min="0" required>
    <button type="submit">Calcular</button>
    </form>
    
<?php 
if (isset($_POST['numero'])) {
    $numero = (int) $_POST['numero'];
    $fatorial = 1;
    
    if ($numero < 0) {
        echo "Não existe fatorial de numero negativo.";
    } else {
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        
        echo "O fatorial de $numero é $fatorial";
    }
}
?>
</body>
</html>