<?php

class Dispatcher {

	protected $controller;

	protected $action;
    
	public function route()
	{
		$queryString = isset($_GET['url']) ? $_GET['url'] : 'index/index';

		$queryString = explode('/', $queryString);

		$this->controller = (isset($queryString[0]) ? ucwords($queryString[0]) : 'Index') . 'Controller';

		$this->action = (isset($queryString[1]) ? $queryString[1] : 'index') . 'Action';

		require CONTROLLER . '/' . $this->controller . '.php';

		if(count($queryString) > 2){
			$parametros = [];

			for ($i=2; $i < count($queryString); $i++) { 
				$parametros[] = $queryString[$i];
			}

			@call_user_func_array(array($this->controller, $this->action), $parametros);
		} else {
			$controller = new $this->controller();

			$action = $this->action;

			$controller->$action();
		}
	}

}