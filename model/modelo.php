<?php

class Modelo extends Model{

    public function listar($where = '')
    {
        if($where != ''){
            $where = "WHERE $where";
        }

        $sql = "SELECT
                mo.id_modelo,
                mo.id_marca,
                mo.nome,
                m.nome as marca
                FROM modelo mo
                INNER JOIN marca m ON mo.id_marca=m.id_marca
                $where
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


    public function excluir($id_modelo)
    {
        $modelo = $this->transacao("DELETE FROM modelo WHERE id_modelo=$id_modelo");


        $mensagem = '';

        if($modelo == 1)
           $mensagem .= "$modelo veículo foi deletado.<br />";
        elseif($modelo > 1)
           $mensagem .= "$modelo veículos foram deletados.<br />";

        if($mensagem != '')
            return $mensagem;

        //return false;
    }
}
