<?php

class Funcionario extends Model
{

    public function listar()
    {
        $sql = "SELECT * FROM vendedor ORDER BY nome";

        $this->executar($sql);

        return $this->getRows();
    }

    public function cadastrar($funcionario){
        $col = "nome,sobrenome,endereco,idade,data_admissao,cpf";
        $value = "'".$funcionario->nome."',";
        $value .= "'".$funcionario->sobrenome."',";
        $value .= "'".$funcionario->endereco."',";
        $value .= "'".$funcionario->idade."',";
        $value .= "'".$funcionario->data_admissao."',";
        $value .= "'".$funcionario->cpf."'";
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
