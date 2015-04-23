<?php

class modeloController extends Controller {
    
    private $modelo;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->modelo = $this->model('modelo');
    }
    
    public function indexAction(){
        $this->view->render("modelo/index");
    }
    
    public function listarAction(){
        $view = array(
            'modelos' => $this->modelo->listar()
        );

        $this->view->render('modelo/listar', $view);
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

    public function alterarAction()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $modelo = new StdClass();

            $modelo->nome = $_POST['nome'];
            $modelo->id_modelo = $_POST['id_modelo'];

            $this->cor->alterar($modelo);
        }
    }

    
}
