<?php

class marcaController extends Controller {
    
    private $marca; 
    
    public function __construct()
    {
        parent::__construct();
        
        $this->marca = $this->model('marca');
    }
    
    public function cadastrarAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $marca = new StdClass();
            
            $marca->nome = $_POST['nome'];
            
            $this->marca->cadastrar($marca);
        }
        $this->view->render('marca/cadastrar');
        
    }
    
    public function alterarAction()
    {
        $marca = new StdClass();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $marca->nome = $_POST['nome'];
            
            $this->marca->alterar($marca);
        }
        
        print_r($this->marca->getMarca());
        
        $this->view->render('marca/alterar');
    }
    
    public function excluirAction($id_marca)
    {
        
    }
    
} 