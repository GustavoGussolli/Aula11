<?php 

require_once("Produto.php");

    class ProdutoComputador extends Produto{

        private $processador;
        private $memoria;

        public function getDados(){
            echo "Descrição: " . $this->getDescricao() . 
            "| Unidade De Medida: " . $this->getUnidadeMedida() . 
            "| Processador: " . $this->getProcessador() . 
            "| Memoria: " . $this->getMemoria() . "\n";
        }

        /**
         * Get the value of processador
         */
        public function getProcessador()
        {
                return $this->processador;
        }

        /**
         * Set the value of processador
         */
        public function setProcessador($processador): self
        {
                $this->processador = $processador;

                return $this;
        }

        /**
         * Get the value of memoria
         */
        public function getMemoria()
        {
                return $this->memoria;
        }

        /**
         * Set the value of memoria
         */
        public function setMemoria($memoria): self
        {
                $this->memoria = $memoria;

                return $this;
        }
    }