<?php

require_once("modelo/Ingresso.php");
require_once("modelo/IngressoVip.php");
require_once("modelo/IngressoCamarote.php");

$lista = array();

for ($i = 0; $i < 3; $i++) { 
    echo "------------------------ \n";
    echo "| 1- Ingresso Normal   | \n";
    echo "|----------------------| \n";
    echo "| 2- Ingresso Vip      | \n";
    echo "|----------------------| \n";
    echo "| 3- Ingresso Camarote | \n";
    echo "------------------------ \n";

    $tipo = readline("Informe o tipo do Ingresso: ");

    if ($tipo == 1) {
        $ingresso = new Ingresso(50.00);
    } elseif ($tipo == 2) {
        $ingresso = new IngressoVIP(50.00, 30.00);
    } else {
        $ingresso = new IngressoCamarote(50.00, 30.00, 20.00);
    }

    $lista[] = $ingresso;
}

foreach ($lista as $l) {
    echo $l . "\n"; 
}
