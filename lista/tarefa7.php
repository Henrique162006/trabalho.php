<?php

$numero = 20;

while ($numero >= 0) {

    echo $numero;

    if ($numero % 5 == 0) {
        echo " - Múltiplo de 5";
    }

    echo "<br>";

    $numero--;
}

echo "Contagem encerrada!";

?>