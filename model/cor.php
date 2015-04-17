<?php

class Cor extends Model {

    public function cadastrar($cor)
    {
        $sql = "INSERT INTO cor (nome) VALUES ('{$cor->nome}')";
        
        $this->executar($sql); 
    }
}