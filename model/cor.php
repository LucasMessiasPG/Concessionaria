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
    
    public function alterar($cor)
    {
        $sql = "UPDATE cor SET nome = {$cor->nome} WHERE id={$cor->id_cor}";
        
        $this->executar($sql); 
    }

}
