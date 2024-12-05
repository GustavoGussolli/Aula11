<?php 
require_once("Midia.php");

class MidiaDVD extends Midia{
    
    public function getTipo(){
        echo "Tipo: DVD \n";
    }
}