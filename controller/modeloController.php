<?php

class modeloController extends Controller {
    
    private $modelo;
    
    private $marca;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->modelo = $this->model('modelo');
        $this->marca = $this->model('marca');
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
            
            $this->set_userdata('mensagem', 'Modelo cadastrado.');
        }
        $view = array(
            'marcas' => $this->marca->listar()
        );
            
        $this->view->render('modelo/cadastrar', $view);
    }


    public function alterarAction($id_modelo)
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $modelo = new StdClass();

            $modelo->nome = $_POST['nome'];
            $modelo->id_modelo = $_POST['id_modelo'];

            $this->cor->alterar($modelo);
            
            $this->set_userdata('mensagem', 'Modelo alterado.');
        }


        $modelo = $this->modelo->get($id_modelo);

        $view = array (
            'modelo' => $modelo
        );



        $this->view->render('modelo/alterar', $view);

    }

    
}
