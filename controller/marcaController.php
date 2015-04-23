<?php

class marcaController extends Controller {
    
    private $marca; 
    
    public function __construct()
    {
        parent::__construct();
        
        $this->marca = $this->model('marca');
    }
    
    public function indexAction(){
        $this->view->render("marca/index");
    }
    
     public function listarAction(){
        $view = array(
            'marcas' => $this->marca->listar("marca")
        );

        $this->view->render('marca/listar', $view);
    }

    public function cadastrarAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $marca = new StdClass();
            
            $marca->nome = $_POST['nome'];
            
            $this->marca->cadastrar($marca);
        }
        $this->view->render('marca/cadastrar');
        
        $this->set_userdata('mensagem', 'Marca cadastrada.');   
    }
    
    public function alterarAction()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $marca = new StdClass();

            $marca->nome = $_POST['nome'];
            $marca->id_marca = $_POST['id_marca'];

            $this->cor->alterar($marca);
            
            $this->set_userdata('mensagem', 'Marca alterada.');
        }
    }
    
    public function excluirAction($id_marca)
    {
        
    }
    
}
