<?php

abstract class Model {

	protected $driver;

	public function __construct()
	{
		//INSTANCIA O DRIVER RESPONSAVEL PELO MODELO
		require 'driverModel/' . DRIVER . '.php';

		$classe = DRIVER;

		$this->driver = new $classe();
	}

	//EXECUTA A SQL
	public function executar($sql)
	{
		$this->driver->query($sql);
	}

	public function getRow()
	{
		return $this->driver->getRow();
	}

	public function getRows()
	{
		return $this->driver->getRows();
	}

    public function listar($tabela){
        $sql = "SELECT * FROM $tabela";

        $this->executar($sql);

        return $this->getRows();
    }

}
