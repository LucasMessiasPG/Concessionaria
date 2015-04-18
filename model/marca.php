<?php

class Marca extends Model{

    
    public function getMarca(){
        $sql = "SELECT * FROM marca";
        
        $this->executar($sql);
        
        
        return $this->getRows();
        
    }
    
    public function cadastrar($marca){
        $sql = "INSERT INTO marca (nome) VALUES ('{$marca->nome}')";
        
        $this->executar($sql);
        
    }
    
}