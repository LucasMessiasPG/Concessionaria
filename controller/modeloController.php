<?php

class modeloController extends Controller {
    
    private $modelo;
    
    private $marca;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->modelo = $this->model('modelo');
        $this->marca = $this->model('marca');
    }
    
    public function indexAction(){
        $this->view->render("modelo/index");
    }
    
    public function listarAction(){
        $view = array(
            'modelos' => $this->modelo->listar()
        );

        $this->view->render('modelo/listar', $view);
    }

    public function cadastrarAction()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $modelo = new StdClass();

            $this->modelo->nome = $_POST['nome'];
            $this->modelo->id_marca = $_POST['id_marca'];

            $this->modelo->cadastrar($this->modelo);
            
            $this->set_userdata('mensagem', 'Modelo cadastrado.');
        }
        $view = array(
            'marcas' => $this->marca->listar()
        );
            
        $this->view->render('modelo/cadastrar', $view);
    }


    public function alterarAction($id_modelo = '')
    {
        $modelo = $this->validacao($id_modelo);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $modelo = new StdClass();

            $modelo->id_marca = $_POST['id_marca'];
            $modelo->nome = $_POST['nome'];
            $modelo->id_modelo = $id_modelo;

            $this->modelo->alterar($modelo);
            
            $this->set_userdata('mensagem', 'Modelo alterado.');
        }



        $view = array (
            'marcas' => $this->marca->listar(),
            'modelos' => $this->modelo->listar(),
            'modeloAtual' => $modelo
        );



        $this->view->render('modelo/alterar', $view);

    }

    public function excluirAction($id_modelo)
    {
        $modelo = $this->validacao($id_modelo);

        if($mensagem = $this->modelo->excluir($id_modelo)){
            $this->set_userdata('mensagem', $mensagem);

            $view = array('voltar' => 'marca/listar');
            $this->view->render('excluir', $view);
        } else {
            $this->redirect('modelo/listar');
        }
    }

    public function selectAction($id_marca = '')
    {
        echo json_encode($this->modelo->listar("m.id_marca = $id_marca"));
    }

    /**
    *assegura que virá alguma coisa na query
    * @return dados_modelos
    */
    protected function validacao($id_modelo)
    {
        $modelo = $this->modelo->get($id_modelo);

        if(!($id_modelo > 0) || !$modelo)
            $this->redirect('modelo/listar');

        return $modelo;
    }

    
}
