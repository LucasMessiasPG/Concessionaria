<?php

class veiculoController extends Controller {
    
    private $veiculo;
    
    private $marca;
    
    private $cor;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->veiculo = $this->model('veiculo');
        $this->modelo = $this->model('modelo');
        $this->cor = $this->model('cor');
    }
    
    public function indexAction(){
        $this->view->render("veiculo/index");
    }
    
    public function cadastrarAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $veiculo = new StdClass();
            
            $veiculo->id_modelo = $_POST['id_modelo'];
            $veiculo->id_cor = $_POST['id_cor'];
            $veiculo->placa = $_POST['placa'];
            $veiculo->ano_fabricacao = $_POST['ano_fabricacao'];
            $veiculo->ano_modelo = $_POST['ano_modelo'];
            $veiculo->preco = $_POST['preco'];
            
            $this->veiculo->cadastrar($veiculo);
            
            $this->set_userdata('mensagem', 'Veículo cadastrado.');
        }
        
        $anos = array();
        
        for ($i = 1960; $i <= (date('Y')+1); $i++) {
            $anos[] = $i;
        }
        
        $view = array(
            'modelos' => $this->modelo->listar(),
            'cores' => $this->cor->listar(),
            'anos' => $anos
        );
        
        $this->view->render('veiculo/cadastrar', $view);
        
    }
    
    public function listarAction(){
        $view = array(
            'veiculos' => $this->veiculo->listar()
        );

        $this->view->render('veiculo/listar', $view);
    }
    
    public function alterarAction()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $marca = new StdClass();

            $veiculo->placa = $_POST['placa'];
            $veiculo->id_modelo = $_POST['modelo'];
            $veiculo->id_cor = $_POST['cor'];
            $veiculo->ano_fabricacao = $_POST['ano_fabricacao'];
            $veiculo->ano_modelo = $_POST['ano_modelo'];
            $veiculo->preco = $_POST['preco'];

            $this->cor->alterar($modelo);
            
            $this->set_userdata('mensagem', 'Veículo alterado.');
        }
    }
    
    public function excluirAction($id_veiculo)
    {
        if($this->veiculo->excluir($id_veiculo)){
            $this->set_userdata('mensagem', 'Veículo excluido.');
            
            $this->redirect('veiculo/listar');
        }
    }
    
}
