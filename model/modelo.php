<?php

class Modelo extends Model{

    public function listar()
    {
        $sql = "SELECT * FROM modelo ORDER BY nome";

        $this->executar($sql);

        return $this->getRows();
    }

    public function get($id_modelo)
    {
        $sql = "SELECT nome FROM modelo WHERE id_modelo=$id_modelo LIMIT 1";

        if($this->executar($sql)){
            return $this->getRow();
        };
        return false;

    }

    public function cadastrar($modelo){
        $sql = "INSERT INTO modelo (nome,id_marca) VALUES ('{$modelo->nome}','{$modelo->marca}')";
        $this->transacao($sql);
    }

    public function alterar($modelo)
    {
        $sql = "UPDATE modelo SET nome = {$modelo->nome} WHERE id={$modelo->id_modelo}";

        $this->transacao($sql);
    }
}
