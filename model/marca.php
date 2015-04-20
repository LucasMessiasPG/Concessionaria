<?php

class Marca extends Model{

    public function cadastrar($marca){
        $sql = "INSERT INTO marca (nome) VALUES ('{$marca->nome}')";
        
        $this->executar($sql);

    }
    
}
