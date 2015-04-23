<?php

class Marca extends Model{

    public function listar()
    {
        $sql = "SELECT * FROM marca ORDER BY nome";

        $this->executar($sql);

        return $this->getRows();
    }

    public function get($id_marca)
    {
        $sql = "SELECT nome FROM marca WHERE id_marca=$id_marca LIMIT 1";

        $this->executar($sql);

        return $this->getRow();
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
