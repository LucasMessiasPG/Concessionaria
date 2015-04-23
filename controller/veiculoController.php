<?php

class veiculoController extends Controller {
    
    private $veiculo; 
    
    public function __construct()
    {
        parent::__construct();
        
        $this->veiculo = $this->model('veiculo');
    }
    
    public function indexAction(){
        $this->view->render("veiculo/index");
    }
    
    public function cadastrarAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $veiculo = new StdClass();
            
            $veiculo->placa = $_POST['placa'];
            $veiculo->id_modelo = $_POST['modelo'];
            $veiculo->id_cor = $_POST['cor'];
            $veiculo->ano_fabricacao = $_POST['ano_fabricacao'];
            $veiculo->ano_modelo = $_POST['ano_modelo'];
            $veiculo->preco = $_POST['preco'];
            
            
            $this->veiculo->cadastrar($veiculo);
        }
        $lista = '';
        $lista[] = $this->veiculo->listar('marca');
        $lista[] = $this->veiculo->listar('modelo');
        $lista[] = $this->veiculo->listar('cor');
        $this->view->render('veiculo/cadastrar', $lista);
        
    }
    
    public function listarAction(){
        $lista = $this->veiculo->listar("veiculo");
        $this->view->render('veiculo/listar', $lista);
    }
    
    public function alterarAction($id_veiculo)
    {
        
    }
    
    public function excluirAction($id_veiculo)
    {
        
    }
    
}