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

        $view = array(
            'modelos' => $this->modelo->listar(),
            'cores' => $this->cor->listar(),
            'anos' => $this->anos()
        );
        
        $this->view->render('veiculo/cadastrar', $view);
        
    }
    
    public function listarAction(){
        $view = array(
            'veiculos' => $this->veiculo->listar()
        );

        $this->view->render('veiculo/listar', $view);
    }
    
    public function alterarAction($id_veiculo = '')
    {
        $veiculo = $this->validacao($id_veiculo);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $veiculo = new StdClass();

            $veiculo->placa = $_POST['placa'];
            $veiculo->id_modelo = $_POST['id_modelo'];
            $veiculo->id_cor = $_POST['id_cor'];
            $veiculo->ano_fabricacao = $_POST['ano_fabricacao'];
            $veiculo->ano_modelo = $_POST['ano_modelo'];
            $veiculo->preco = $_POST['preco'];

            if($this->veiculo->alterar($veiculo, $id_veiculo)){
                $this->set_userdata('mensagem', 'Veículo alterado.');
            } else {
                $this->set_userdata('error', 'Erro ao alterar Veículo.');
            }
        }

        $view = array(
            'modelos' => $this->modelo->listar(),
            'cores' => $this->cor->listar(),
            'anos' => $this->anos(),
            'veiculoAtual' => $veiculo
        );

        $this->view->render('veiculo/alterar', $view);
    }
    
    public function excluirAction($id_veiculo = '')
    {
        if($this->veiculo->excluir($id_veiculo)){
            $this->set_userdata('mensagem', 'Veículo excluido.');
            
            $view = array('voltar' => 'veiculo/listar');

            $this->view->render('excluir', $view);
        } else {
            $this->redirect('veiculo/listar');
        }
    }
    
    protected function anos()
    {
        $anos = array();

        for ($i = 1960; $i <= (date('Y')+1); $i++) {
            $anos[] = $i;
        }

        return $anos;
    }

    protected function validacao($id_veiculo)
    {
        $veiculo = $this->veiculo->get($id_veiculo);

        if(!($id_veiculo > 0) || !$veiculo)
            $this->redirect('veiculo/listar');

        return $veiculo;
    }

}
