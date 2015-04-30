<?php

class funcionarioController extends Controller
{
    private $funcionario;

    public function __construct()
    {
        parent::__construct();

        $this->funcionario = $this->model('funcionario');

    }

    public function indexAction (){
        $view = array(
           "vendedor" => $this->funcionario->get('vendedor')
        );

        $this->view->render('funcionario/listar', $view);

    }

    public function cadastrarAction (){

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $funcionario = new stdClass();

            $funcionario->nome = $_POST['nome'];
            $funcionario->sobrenome = $_POST['sobrenome'];
            $funcionario->endereco = $_POST['endereco'];
            $funcionario->idade = $_POST['idade'];
            $funcionario->data_admissao = $_POST['data_admissao'];
            $funcionario->cpf = $_POST['cpf'];

            $this->funcionario->cadastrar($funcionario);

        }
        $this->view->render('funcionario/cadastrar');
    }

    public function alterarAction ($id_vendedor){

        $vendedor = $this->funcionario->get($id_vendedor);

        $view = array(
           "vendedor" => $vendedor
        );

        $this->view->render('funcionario/alterar', $view);
    }


    public function excluirAction (){

    }
}
