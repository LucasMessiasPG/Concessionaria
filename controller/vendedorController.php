<?php

class VendedorController extends Controller
{
    private $vendedor;

    public function __construct()
    {
        parent::__construct();

        $this->vendedor = $this->model('vendedor');

    }

    public function indexAction (){
        $view = array(
           "vendedores" => $this->vendedor->listar('vendedor')
        );

        $this->view->render('vendedor/listar', $view);

    }

    public function cadastrarAction (){

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $vendedor = new stdClass();

            $vendedor->nome = $_POST['nome'];
            $vendedor->sobrenome = $_POST['sobrenome'];
            $vendedor->endereco = $_POST['endereco'];
            $vendedor->idade = $_POST['idade'];
            $vendedor->data_admissao = $_POST['data_admissao'];
            $vendedor->cpf = $_POST['cpf'];

            $this->vendedor->cadastrar($vendedor);

        }
        $this->view->render('vendedor/cadastrar');
    }

    public function alterarAction ($id_vendedor){

        $vendedor = $this->vendedor->get($id_vendedor);

        $view = array(
           "vendedor" => $vendedor
        );

        $this->view->render('vendedor/alterar', $view);
    }


    public function excluirAction (){

    }
}
