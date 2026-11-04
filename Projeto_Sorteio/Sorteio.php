<?php
$premio = "";
$numero = "";
$erro = "";
$arquivo = "historico_sorteio.json";
$historico = [];


// Carregar histórico
if (file_exists($arquivo)) {
    $historico = json_decode(file_get_contents($arquivo), true) ?? [];
}


// Fazer sorteio
if (isset($_POST["sortear"])) {


    $premio = $_POST["premio"];
    $inicio = (int) $_POST["inicio"];
    $fim = (int) $_POST["fim"];


    if ($inicio < 1 || $fim > 1000 || $inicio > $fim) {


        $erro = "Escolha um intervalo válido!";


    } else {


        $sorteados = [];


        foreach ($historico as $sorteio) {
            if ($sorteio["inicio"] == $inicio && $sorteio["fim"] == $fim) {
                $sorteados[] = $sorteio["numero"];
            }
        }


        $disponiveis = array_diff(range($inicio, $fim), $sorteados);


        if (count($disponiveis) > 0) {


            $disponiveis = array_values($disponiveis);
            $numero = $disponiveis[array_rand($disponiveis)];


            $historico[] = [
                "premio" => $premio,
                "numero" => $numero,
                "inicio" => $inicio,
                "fim" => $fim,
                "data" => date("d/m/Y"),
                "hora" => date("H:i:s")
            ];


            file_put_contents($arquivo, json_encode($historico, JSON_PRETTY_PRINT));


        } else {
            $erro = "Todos os números desse intervalo já foram sorteados!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <title>Sorteio de Rifa</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>


    <div class="container">


        <h1>SORTEIO DE RIFA</h1>


        <form method="POST">


            <label>Nome do prêmio:</label>
            <input type="text" name="premio" placeholder="Digite o prêmio" required>


            <label>Número inicial:</label>
            <input type="number" name="inicio" min="1" max="1000" placeholder="Ex: 1" required>


            <label>Número final:</label>
            <input type="number" name="fim" min="1" max="1000" placeholder="Ex: 100" required>


            <button type="submit" name="sortear">Sortear</button>


        </form>


        <?php if ($erro != "") { ?>
            <p><?php echo $erro; ?></p>
        <?php } ?>


        <?php if ($numero != "") { ?>


            <div class="resultado">


                <h2>RESULTADO DO SORTEIO</h2>


                <p>Prêmio sorteado:</p>
                <h3><?php echo htmlspecialchars($premio); ?></h3>


                <p>Número premiado:</p>
                <h1><?php echo str_pad($numero, 2, "0", STR_PAD_LEFT); ?></h1>


            </div>


        <?php } ?>


        <div class="historico">


            <h2>HISTÓRICO DE NÚMEROS SORTEADOS</h2>


            <?php if (count($historico) > 0) { ?>


                <table>


                    <tr>
                        <th>Prêmio</th>
                        <th>Número</th>
                        <th>Intervalo</th>
                        <th>Data</th>
                        <th>Hora</th>
                    </tr>


                    <?php foreach (array_reverse($historico) as $sorteio) { ?>


                        <tr>
                            <td><?php echo htmlspecialchars($sorteio["premio"]); ?></td>
                            <td><?php echo str_pad($sorteio["numero"], 2, "0", STR_PAD_LEFT); ?></td>
                            <td>
                                <?php echo $sorteio["inicio"] . " a " . $sorteio["fim"]; ?>
                            </td>
                            <td><?php echo $sorteio["data"]; ?></td>
                            <td><?php echo $sorteio["hora"]; ?></td>
                        </tr>


                    <?php } ?>


                </table>


            <?php } else { ?>


                <p>Nenhum número foi sorteado ainda.</p>


            <?php } ?>


        </div>


        <div class="data">
            <p>Data: <?php echo date("d/m/Y"); ?></p>
            <p>Hora: <?php echo date("H:i:s"); ?></p>
        </div>


    </div>


</body>
</html>