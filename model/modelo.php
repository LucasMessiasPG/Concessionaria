<?php

class Modelo extends Model{

    public function listar()
    {
        $sql = "SELECT
                mo.id_modelo,
                mo.id_marca,
                mo.nome,
                m.nome as marca
                FROM modelo mo
                INNER JOIN marca m ON mo.id_marca=m.id_marca
                ORDER BY nome";


        $this->executar($sql);

        return $this->getRows();
    }

    public function get($id_modelo)
    {
        $sql = "SELECT
                mo.id_modelo,
                mo.id_marca,
                mo.nome,
                m.nome as marca
                FROM modelo mo
                INNER JOIN marca m ON mo.id_marca=m.id_marca
                WHERE mo.id_modelo=$id_modelo
                LIMIT 1";

        if($this->executar($sql)){
            return $this->getRow();
        };
        return false;

    }

    public function cadastrar($modelo){
        $sql = "INSERT INTO modelo (nome,id_marca) VALUES ('{$modelo->nome}','{$modelo->id_marca}')";
        $this->transacao($sql);
    }

    public function alterar($modelo)
    {
        $sql = "UPDATE modelo SET nome = '{$modelo->nome}', id_marca = '{$modelo->id_marca}' WHERE id_modelo='{$modelo->id_modelo}'";

        $this->transacao($sql);
    }
}
