<?php

class Modelo extends Model{

    public function listar()
    {
        $sql = "SELECT * FROM modelo ORDER BY nome";

        $this->executar($sql);

        return $this->getRows();
    }

    public function cadastrar($modelo){
        $sql = "INSERT INTO modelo (nome,id_marca) VALUES ('{$modelo->nome}','{$modelo->marca}')";
        $this->executar($sql);
    }

    public function alterar($modelo)
    {
        $sql = "UPDATE modelo SET nome = {$modelo->nome} WHERE id={$modelo->id_modelo}";

        $this->executar($sql);
    }
}
