<?php 

require_once("Produto.php");

    class ProdutoBalde extends Produto{

        private $capacidade;

        public function getDados(){
            echo "Descrição: " . $this->getDescricao() . 
            "| Unidade De Medida: " . $this->getUnidadeMedida() . 
            "| Processador: " . $this->getCapacidade() . "\n";
        }

        /**
         * Get the value of capacidade
         */
        public function getCapacidade()
        {
                return $this->capacidade;
        }

        /**
         * Set the value of capacidade
         */
        public function setCapacidade($capacidade): self
        {
                $this->capacidade = $capacidade;

                return $this;
        }
    }