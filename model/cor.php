<?php

class Cor extends Model {

    public function listar()
    {
        $sql = "SELECT * FROM cor ORDER BY nome";
        
        $this->executar($sql);
        
        return $this->getRows();
    }
    
    public function cadastrar($cor)
    {
        $sql = "INSERT INTO cor (nome) VALUES ('{$cor->nome}')";
        
        $this->executar($sql); 
    }
}