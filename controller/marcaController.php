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

            $this->set_userdata('mensagem', 'Marca cadastrada.');
        }
        $this->view->render('marca/cadastrar');
    }

    public function alterarAction($id_marca)
    {
        $marca = $this->validacao($id_marca);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $marca = new StdClass();

            $marca->nome = $_POST['nome'];
            $marca->id_marca = $id_marca;

            $this->marca->alterar($marca);

            $this->set_userdata('mensagem', 'Marca alterada.');
        }



        $view = array (
            'marca' => $marca
        );



        $this->view->render('marca/alterar', $view);
    }

    public function excluirAction($id_marca)
    {
        $marca = $this->validacao($id_marca);

        if($mensagem = $this->marca->excluir($id_marca)){
            $this->set_userdata('mensagem', $mensagem);

            $view = array('voltar' => 'marca/listar');
            $this->view->render('excluir', $view);
        } else {
            //$this->redirect('marca/listar');
        }
    }

    /**
    *assegura que virá alguma coisa na query
    * @return dados_modelos
    */
    protected function validacao($id_marca)
    {
        $marca = $this->marca->get($id_marca);

        if(!($id_marca > 0) || !$marca)
            $this->redirect('marca/listar');

        return $marca;
    }

}
