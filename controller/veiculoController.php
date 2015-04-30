<?php

class veiculoController extends Controller {

    private $veiculo;

    private $marca;

    private $modelo;

    private $cor;

    /**
    * função para carregar os modelos disponiveis em todas as telas
    */

    public function __construct()
    {
        parent::__construct();

        $this->veiculo = $this->model('veiculo');
        $this->marca = $this->model('marca');
        $this->modelo = $this->model('modelo');
        $this->cor = $this->model('cor');
    }

    /**
    * função para mostrar opções disponiveis na tela
    * @return View index
    */

    public function indexAction(){
        $this->view->render("veiculo/index");
    }

    public function cadastrarAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(strpos($_POST['placa'], '-') === false){
                $_POST['placa'] = substr($_POST['placa'], 0, 3) . '-' . substr($_POST['placa'], 3);
            }

            if(strlen($_POST['placa']) != 8){
                $this->set_userdata('error', 'Placa incorreta.');
            }
            elseif(empty($_POST['id_modelo'])){
                $this->set_userdata('error', 'Selecione um modelo.');
            }
            elseif(!is_numeric($_POST['preco'])){
                $this->set_userdata('error', 'Preço incorreto.');
            } else {
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
        }

        $view = array(
            'marcas' => $this->marca->listar(),
            'modelos' => $this->modelo->listar(),
            'cores' => $this->cor->listar(),
            'anos' => $this->anos()
        );

        $this->view->render('veiculo/cadastrar', $view);

    }

    /**
    * função para listar veiculo
    * @return View listar
    */

    public function listarAction(){
        $view = array(
            'veiculos' => $this->veiculo->listar()
        );

        $this->view->render('veiculo/listar', $view);
    }

    /**
    * função para alterar veiculo
    * @return View alterar
    */

    public function alterarAction($id_veiculo = '')
    {
        $veiculo = $this->validacao($id_veiculo);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(strpos($_POST['placa'], '-') === false){
                $_POST['placa'] = substr($_POST['placa'], 0, 3) . '-' . substr($_POST['placa'], 3);
            }

            if(strlen($_POST['placa']) != 8){
                $this->set_userdata('error', 'Placa incorreta.');
            }
            elseif(empty($_POST['id_modelo'])){
                $this->set_userdata('error', 'Selecione um modelo.');
            }
            elseif(!is_numeric($_POST['preco'])){
                $this->set_userdata('error', 'Preço incorreto.');
            } else {
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
        }

        $view = array(
            'marcas' => $this->marca->listar(),
            'modelos' => $this->modelo->listar(),
            'cores' => $this->cor->listar(),
            'anos' => $this->anos(),
            'veiculoAtual' => $veiculo
        );

        $this->view->render('veiculo/alterar', $view);
    }

    /**
    * função para excluir veiculo
    * @return View excluir
    */

    public function excluirAction($id_veiculo = '')
    {
        $veiculo = $this->validacao($id_veiculo);

        if($this->veiculo->excluir($id_veiculo)){
            $this->set_userdata('mensagem', 'Veículo excluido.');

            $view = array('voltar' => 'veiculo/listar');

            $this->view->render('excluir', $view);
        } else {
            $this->redirect('veiculo/listar');
        }
    }

    /**
    * funcao para montar select de ano_fabricacao e ano_modelo
    * @return array de Anos
    */

    protected function anos()
    {
        $anos = array();

        for ($i = 1960; $i <= (date('Y')+1); $i++) {
            $anos[] = $i;
        }

        return $anos;
    }

    /**
    * assegura que virá alguma coisa na query
    * @return dados_modelos
    */

    protected function validacao($id_veiculo)
    {
        $veiculo = $this->veiculo->get($id_veiculo);

        if(!($id_veiculo > 0) || !$veiculo)
            $this->redirect('veiculo/listar');

        return $veiculo;
    }

}
