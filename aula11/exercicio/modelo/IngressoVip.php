<?php

require_once("Ingresso.php");

class IngressoVIP extends Ingresso {
    private $valorAdicional;

    public function __construct($valor, $valorAdicional) {
        parent::__construct($valor);
        $this->valorAdicional = $valorAdicional;
    }

    public function getValorTotal() {
        return $this->valor + $this->valorAdicional;
    }

    public function __toString() {
        return "Ingresso VIP: R$ " . number_format($this->getValorTotal(), 2, ',', '.');
    }
}
