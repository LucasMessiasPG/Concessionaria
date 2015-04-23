<?php

abstract class Model {

	protected $driver;

	public function __construct()
	{
		//INSTANCIA O DRIVER RESPONSAVEL PELO MODELO
		require_once 'driverModel/' . DRIVER . '.php';

		$classe = DRIVER;

		$this->driver = new $classe();
	}

	//EXECUTA A SQL
	public function executar($sql)
	{
		$query = $this->driver->query($sql);

        return true;
	}

    //EXECUTA A SQL
	public function transacao($sql)
	{
		$query = $this->driver->query($sql);

        if(pg_affected_rows($query) > 0)
            return true;

        return false;
	}

	public function getRow()
	{
		return $this->driver->getRow();
	}

	public function getRows()
	{
		return $this->driver->getRows();
	}

}
