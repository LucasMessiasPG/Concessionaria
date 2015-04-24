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
        $sql = "SELECT nome FROM marca WHERE id_marca=$id_marca LIMIT 1";

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

        $modelo = $this->transacao("DELETE FROM modelo WHERE id_marca=$id_marca");

        $marca = $this->transacao("DELETE FROM marca WHERE id_marca=$id_marca");

        $mensagem = '';


        if($modelo > 0)
           $mensagem .= count($modelo)." modelos deletados.<br />";

        if($marca > 0)
           $mensagem .= "Marca deletada.";

        if($mensagem != '')
            return $mensagem;

        return false;
    }

}
