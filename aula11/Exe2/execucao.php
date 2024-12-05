<?php

require_once("modelo/Midia.php");
require_once("modelo/MidiaCD.php");
require_once("modelo/MidiaDVD.php");

$lista = array();

for ($i = 0; $i <= 4; $i++) {

    $tipo = readline("Informe o Tipo: ");

    if ($tipo == "DVD") {
        $midia = new MidiaDVD();
        $midia->setDescricao(readline("Informe a Descrição: "));
        $midia->setPrecoPago(readline("Informe o Preço Pago: "));
        array_push($lista, $midia);
    } else if ($tipo == "CD") {
        $midia = new MidiaCD();
        $midia->setDescricao(readline("Informe a Descrição: "));
        $midia->setPrecoPago(readline("Informe o Preço Pago: "));
        array_push($lista, $midia);
    } else {
        $midia = new Midia();
        $midia->setDescricao(readline("Informe a Descrição: "));
        $midia->setPrecoPago(readline("Informe o Preço Pago: "));
        array_push($lista, $midia);
    }
}

system('clear');

foreach ($lista as $l) {

    $l->getDados();
    $l->getTipo();
}
