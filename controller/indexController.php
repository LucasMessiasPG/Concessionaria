<?php

class IndexController extends Controller {

	public function indexAction()
	{
		$m = $this->model('veiculo');

		$veiculos = $m->getAllVeiculos();

		$parametros = array(
			'veiculos' => $veiculos
		);

		$this->view->render('index/index', $parametros);
	}

}