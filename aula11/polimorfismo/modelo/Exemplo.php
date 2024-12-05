<?php

class Exemplo
{

    public function escreva($v = "", $w = "")
    {

        if($v == " " && $w == " "){
            echo "Valor: sem valor \n";

        } else if ($w == " "){
            echo "Valor: " . $v . "\n";

        } else {
            echo "Valor:" . $v . " " . $w . "\n";
        }
    }
}
