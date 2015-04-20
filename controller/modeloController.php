<?php

class modeloController extends Controller {
    
    private $modelo;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->modelo = $this->model('modelo');
    }
    
    public function indexAction(){
        $lista = $this->modelo->listar("modelo");
        $this->view->render('modelo/listar', $lista);
    }

    public function cadastrarAction()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $modelo = new StdClass();

            $this->modelo->nome = $_POST['nome'];
            $this->modelo->marca = $_POST['marca'];


            $this->modelo->cadastrar($this->modelo);

        }
        $lista = $this->modelo->listar("marca");
        $this->view->render('modelo/cadastrar', $lista);
        
    }

    
}
