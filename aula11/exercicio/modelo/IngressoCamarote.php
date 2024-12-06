<?php

require_once("IngressoVip.php");

class IngressoCamarote extends IngressoVIP {
    private $valorAdicionalCamarote;

    public function __construct($valor, $valorAdicional, $valorAdicionalCamarote) {
        parent::__construct($valor, $valorAdicional);
        $this->valorAdicionalCamarote = $valorAdicionalCamarote;
    }

    public function getValorTotal() {
        return parent::getValorTotal() + $this->valorAdicionalCamarote;
    }

    public function __toString() {
        return "Ingresso Camarote: R$ " . number_format($this->getValorTotal(), 2, ',', '.');
    }
}
