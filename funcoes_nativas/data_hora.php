<?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Data e Hora Atual: " . date("d/m/Y") . "<br>";
    echo "Hora Atual: " . date("H:i:s") . "<br>";
    echo "Daqui a 7 dias: " . date("d/m/y", strtotime("+7 days")) ;