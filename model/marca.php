<?php

class Marca extends Model{

    public function listar()
    {
        $sql = "SELECT * FROM marca ORDER BY nome";

        $this->executar($sql);

        return $this->getRows();
    }

    public function cadastrar($marca){
        $sql = "INSERT INTO marca (nome) VALUES ('{$marca->nome}')";
        
        $this->executar($sql);

    }
    
    public function alterar($marca)
    {
        $sql = "UPDATE marca SET nome = {$marca->nome} WHERE id={$marca->id_marca}";

        $this->executar($sql);
    }

}
