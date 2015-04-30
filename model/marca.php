<?php

class Marca extends Model{

    public function listar()
    {
        $sql = "SELECT * FROM marca ORDER BY nome";

        $this->transacao($sql);

        return $this->getRows();
    }

    public function get($id_marca)
    {
        $sql = "SELECT * FROM marca WHERE id_marca=$id_marca LIMIT 1";

        $this->transacao($sql);

        return $this->getRow();
    }

    public function cadastrar($marca){
        $sql = "INSERT INTO marca (nome) VALUES ('{$marca->nome}')";

        $this->transacao($sql);

    }

    public function alterar($marca)
    {
        $sql = "UPDATE marca SET nome = {$marca->nome} WHERE id={$marca->id_marca}";

        $this->transacao($sql);
    }

    public function excluir($id_marca)
    {
        $veiculo = $this->transacao("DELETE FROM veiculo WHERE id_modelo IN(SELECT id_modelo as modelos FROM modelo WHERE id_marca=$id_marca)");

        $modelo = $this->transacao("DELETE FROM modelo WHERE id_marca='$id_marca'");

        $marca = $this->transacao("DELETE FROM marca WHERE id_marca='$id_marca'");

        $mensagem = '';


        if($veiculo == 1)
           $mensagem .= $veiculo." veiculo foi deletado.<br />";
        elseif($veiculo > 1)
           $mensagem .= $veiculo." veiculos foram deletados.<br />";

        if($modelo == 1)
           $mensagem .= $modelo." modelo foi deletado.<br />";
        elseif($modelo > 1)
           $mensagem .= $modelo." modelos foram deletados.<br />";

        if($marca > 0)
           $mensagem .= "Marca deletada.";

        if($mensagem != '')
            return $mensagem;

        return false;
    }

}
