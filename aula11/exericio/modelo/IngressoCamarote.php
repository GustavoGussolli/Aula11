<?php 

require_once("IngressoVip.php");

class IngressoCamarote{
    private $valorAdicionalCamarote;

    public function getValorTotal(){
        
    }


    /**
     * Get the value of valorAdicionalCamarote
     */
    public function getValorAdicionalCamarote()
    {
        return $this->valorAdicionalCamarote;
    }

    /**
     * Set the value of valorAdicionalCamarote
     */
    public function setValorAdicionalCamarote($valorAdicionalCamarote): self
    {
        $this->valorAdicionalCamarote = $valorAdicionalCamarote;

        return $this;
    }
}