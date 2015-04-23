<?php

class corController extends Controller {
    
    private $cor; 

    public function __construct()
    {
        parent::__construct();
        
        $this->cor = $this->model('cor');
    }

    public function indexAction(){
        $this->view->render("cor/index");
    }
    
    public function listarAction(){
        $view = array(
            'cores' => $this->cor->listar("cor")
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
    
    public function alterarAction()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $cor = new StdClass();

            $cor->nome = $_POST['nome'];
            $cor->id_cor = $_POST['id_cor'];

            $this->cor->alterar($cor);
        }
    }
    
    public function excluirAction($id_cor)
    {
        
    }

    
}
