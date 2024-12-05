<?php

require_once("CanetaAzul.php");

class CanetaVermelha extends CanetaAzul{

    //Método sobreescrevendo o método da classe Pai
    public function escrever(){
        echo "Caneta escrevendo em vermelho. \n";
    }

    public function escreverEspec(){
        $this->escrever();
    }

    public function escreverPai(){
        parent::escrever();
    }
}
