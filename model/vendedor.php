<?php
class Vendedor extends Model
{
    public function listar()
    {
        $sql = "SELECT * FROM vendedor ORDER BY nome";
        $this->executar($sql);
        return $this->getRows();
    }
    public function cadastrar($vendedor){
        $col = "nome,sobrenome,endereco,idade,data_admissao,cpf";
        $value = "'".$vendedor->nome."',";
        $value .= "'".$vendedor->sobrenome."',";
        $value .= "'".$vendedor->endereco."',";
        $value .= "'".$vendedor->idade."',";
        $value .= "'".$vendedor->data_admissao."',";
        $value .= "'".$vendedor->cpf."'";
        $sql = "INSERT INTO vendedor ($col) VALUES ($value)";
        return $this->executar($sql);
    }
     public function get($id_vendedor)
    {
        $sql = "SELECT * FROM vendedor WHERE id_vendedor = $id_vendedor LIMIT 1";
        if($this->executar($sql))
            return $this->getRow();
        return false;
    }
}
