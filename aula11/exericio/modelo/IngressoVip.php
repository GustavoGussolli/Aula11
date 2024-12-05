<?php 

require_once("Ingresso.php");

class IngressoVip{
    private $valorAdicional;

    public function getValorTotal(){
        
    }

    /**
     * Get the value of valorAdicional
     */
    public function getValorAdicional()
    {
        return $this->valorAdicional;
    }

    /**
     * Set the value of valorAdicional
     */
    public function setValorAdicional($valorAdicional): self
    {
        $this->valorAdicional = $valorAdicional;

        return $this;
    }
}