<?php

class Mysql {

	protected $db;

	protected $result;

	public function __construct()
	{
		$host = HOST;
		$user = USER;
		$pass = PASSWORD;
		$dbname = DBNAME;

		$this->db = mysqli_connect(HOST,USER,PASSWORD,DBNAME);
	}

	public function query($sql)
	{
		return $this->result = mysqli_query($this->db, $sql);
	}

	public function getRow()
	{
		return (Object) mysqli_fetch_assoc($this->result);
	}

	public function getRows()
	{
		$retorno = array();
		while($data = mysqli_fetch_object($this->result)){
			$retorno[] = $data;
		}

		return $retorno;
	}

	public function close()
	{
		mysqli_close($this->db);
	}

}