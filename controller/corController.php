<?php

class corController extends Controller {
    
    private $cor; 

    public function __construct()
    {
        parent::__construct();
        
        $this->cor = $this->model('cor');
    }
    
    public function indexAction()
    {
        $this->view->render('cor/listar');
    }
    
    public function cadastrarAction()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){echo 1;
            $cor = new StdClass();

            $cor->nome = $_POST['nome'];

            $this->cor->cadastrar($cor);
        }
        
        $this->view->render('cor/cadastrar');
    }
    
    public function alterarAction($id_cor)
    {
        
    }
    
    public function excluirAction($id_cor)
    {
        
    }
    
}