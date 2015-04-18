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
        $cores = $this->cor->listar();
        
        $view = array(
            'cores' => $cores
        );
        
        $this->view->render('cor/listar', $view);
    }
    
    public function cadastrarAction()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
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