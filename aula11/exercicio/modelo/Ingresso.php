<?php

class Ingresso {
    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function getValorTotal() {
        return $this->valor;
    }

    public function __toString() {
        return "Ingresso: R$ " . number_format($this->getValorTotal(), 2, ',', '.');
    }
}
