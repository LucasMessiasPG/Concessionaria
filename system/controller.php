<?php

require 'view.php';
require 'model.php';

abstract class Controller {

	protected $view;

	public function __construct()
	{
		$this->view = new View();
	}

	public function model($model)
	{
		require MODEL . '/' . $model . '.php';

		$classe = ucwords($model);

		return new $classe();
	}
}