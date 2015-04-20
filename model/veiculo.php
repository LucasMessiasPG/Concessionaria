<?php

class Veiculo extends Model {


	public function getVeiculo(int $veiculo)
	{
		$sql = "SELECT * FROM veiculo WHERE id_veiculo=$veiculo";

		$this->executar($sql);

		return $this->getRow();
	}

}
