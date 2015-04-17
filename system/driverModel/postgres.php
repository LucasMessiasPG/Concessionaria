<?php

class Postgres {
	
	protected $db;

	protected $result;

	public function __construct()
	{
		$host = HOST;
		$user = USER;
		$pass = PASSWORD;
		$dbname = DBNAME;

		$this->db = pg_connect("host=$host user=$user password=$pass dbname=$dbname");
	}

	public function query($sql)
	{
		return $this->result = pg_query($this->db, $sql);
	}

	public function getRow()
	{
		return (Object) pg_fetch_assoc($this->result);
	}

	public function getRows()
	{
		$retorno = array();
		while($data = pg_fetch_object($this->result)){
			$retorno[] = $data;
		}

		return $retorno;
	}

	public function close()
	{
		pg_close($this->db);
	}
}