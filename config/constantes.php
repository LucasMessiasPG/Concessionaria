<?php

//CONSTANTE DE CONTROLADOR PARA O SISTEMA
define('CONTROLLER', 'controller');

//CONSTANTE DE VIEW PARA O SISTEMA
define('VIEW', 'view');

//CONSTANTE DE VIEW PARA O SISTEMA
define('MODEL', 'model');

//DEFINICOES PARA O BANCO DE DADOS

if (pg_connect("host=localhost user=postgres password=postgres dbname=veiculos")) {
	define('DRIVER', 'postgres');
	define('HOST', 'localhost');
	define('USER', 'postgres');
	define('PASSWORD', 'postgres');
	define('DBNAME', 'concessionaria');
}else{
	define('DRIVER', 'mysql');
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', 'root');
	define('DBNAME', 'concessionaria');
}