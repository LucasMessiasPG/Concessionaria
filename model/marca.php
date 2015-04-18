<?php

class Marca extends Model{
    
    public function getMarca(int $marca){
        $sql = "SELECT * FROM marca (nome) WHERE id_marca=$marca";
        
        $this->executar($sql);
        
        
    }
}