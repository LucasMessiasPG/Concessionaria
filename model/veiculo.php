<?php

class Veiculo extends Model {

	public function getAllVeiculos()
	{
		$sql = "SELECT * FROM veiculo";

		$this->executar($sql);

		return $this->getRows();
	}

	public function getVeiculo(int $veiculo)
	{
		$sql = "SELECT * FROM veiculo WHERE id_veiculo=$veiculo";

		$this->executar($sql);

		return $this->getRow();
	}

}