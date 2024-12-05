<?php 

require_once("Produto.php");

    class ProdutoLivro extends Produto{

        private $autor;

        public function getDados(){
            echo "Descrição: " . $this->getDescricao() . 
            "| Unidade De Medida: " . $this->getUnidadeMedida() . 
            "| Autor: " . $this->getAutor() . "\n";
        }


        /**
         * Get the value of autor
         */
        public function getAutor()
        {
                return $this->autor;
        }

        /**
         * Set the value of autor
         */
        public function setAutor($autor): self
        {
                $this->autor = $autor;

                return $this;
        }
    }