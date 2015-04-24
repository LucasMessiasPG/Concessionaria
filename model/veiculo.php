<?php

class Veiculo extends Model {

    /**
    * Cadastra um novo veículo
    * @return Boolean
    */

	public function cadastrar($veiculo)
	{
		$sql = "INSERT INTO veiculo (id_modelo,id_cor,placa,ano_fabricacao,ano_modelo,preco)";
        $sql .= "VALUES ('$veiculo->id_modelo','$veiculo->id_cor','$veiculo->placa','$veiculo->ano_fabricacao','$veiculo->ano_modelo','$veiculo->preco')";
		$this->transacao($sql);

		return $this->getRow();
	}

    /**
    * busca somente um veículo
    * @return Boolean
    */

    public function get($id_veiculo)
    {
        $sql = "SELECT * FROM veiculo WHERE id_veiculo = $id_veiculo LIMIT 1";

        if($this->executar($sql))
            return $this->getRow();

        return false;
    }

    /**
    * Altera um veículo
    * @return Boolean
    */

    public function alterar($veiculo){
        $campos = [];
        $campos[] = 'id_modelo={$veiculo->id_modelo}';
        $campos[] = 'id_cor={$veiculo->id_cor}';
        $campos[] = 'placa={$veiculo->placa}';
        $campos[] = 'ano_fabricacao={$veiculo->ano_fabricacao}';
        $campos[] = 'ano_modelo={$veiculo->ano_modelo}';
        $campos[] = 'preco={$veiculo->preco}';
        $campos = implode(', ', $campos);

        $sql = "UPDATE veiculo SET $campos WHERE id={$veiculo->id_veiculo}";

        return $this->transacao($sql);
    }

    /**
    * Listagem de todos os veiculos cadastrados
    * @return Array Veiculos
    */

    public function listar(){
        $sql = "SELECT
                v.id_veiculo,
                m.nome as modelo,
                c.nome as cor,
                v.placa,
                v.ano_fabricacao,
                v.ano_modelo,
                v.preco
                FROM veiculo v
                INNER JOIN modelo m ON v.id_modelo = m.id_modelo
                INNER JOIN cor c ON v.id_cor = c.id_cor
                ORDER BY modelo";

        $this->transacao($sql);

        return $this->getRows();
    }
    
    /**
    * Exclui um veículo
    * @return Boolean
    */

    public function excluir($id_veiculo)
    {
        if($id_veiculo > 0)
            return $this->transacao("DELETE FROM veiculo WHERE id_veiculo = $id_veiculo");
        
        return false;
    }

}
