<?php 

class Midia{
    private $descricao;
    private $precoPago;
    
    public function getDados(){
        echo "Descrição: " . $this->descricao . " | Preço Pago: " . $this->precoPago . "\n";
    }

    public function getTipo(){
        echo "Tipo: Não possui tipo \n";
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of precoPago
     */
    public function getPrecoPago()
    {
        return $this->precoPago;
    }

    /**
     * Set the value of precoPago
     */
    public function setPrecoPago($precoPago): self
    {
        $this->precoPago = $precoPago;

        return $this;
    }
}