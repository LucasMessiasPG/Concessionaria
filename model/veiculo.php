<?php

class Veiculo extends Model {


	public function cadastrar($veiculo)
	{
		$sql = "INSERT INTO veiculo (id_modelo,id_cor,placa,ano_fabricacao,ano_modelo,preco)";
        $sql .= "VALUES ('$veiculo->id_modelo','$veiculo->id_cor','$veiculo->placa','$veiculo->ano_fabricacao','$veiculo->ano_modelo','$veiculo->preco')";
		$this->executar($sql);

		return $this->getRow();
	}

}
