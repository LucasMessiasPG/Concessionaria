<?php

class Cor extends Model {

    public function get($id_cor)
    {
        $sql = "SELECT * FROM cor WHERE id_cor = $id_cor LIMIT 1";

        if($this->executar($sql))
            return $this->getRow();

        return false;
    }

    public function listar()
    {
        $sql = "SELECT * FROM cor ORDER BY nome";
        
        $this->executar($sql);
        
        return $this->getRows();
    }

    public function cadastrar($cor)
    {
        $sql = "INSERT INTO cor (nome) VALUES ('{$cor->nome}')";
        
        return $this->transacao($sql);
    }
    
    public function alterar($cor)
    {
        $sql = "UPDATE cor SET nome = '{$cor->nome}' WHERE id_cor={$cor->id_cor}";

        return $this->transacao($sql);
    }

    public function excluir($id_cor)
    {
        $veiculos = $this->transacao("DELETE FROM veiculo WHERE id_cor=$id_cor");

        $cor = $this->transacao("DELETE FROM cor WHERE id_cor=$id_cor");

        $mensagem = '';

        if($veiculos > 0)
           $mensagem .= "$veiculos veículos deletados.<br />";

        if($cor > 0)
           $mensagem .= "Cor deletada.";

        if($mensagem != '')
            return $mensagem;
        
        return false;
    }

}
