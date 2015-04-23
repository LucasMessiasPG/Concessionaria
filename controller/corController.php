<?php

class corController extends Controller {
    
    private $cor; 

    public function __construct()
    {
        parent::__construct();
        
        $this->cor = $this->model('cor');

    }

    /**
    * Cria a pagina incial na categoria COR
    * @retun View index
    */

    public function indexAction(){
        $this->view->render("cor/index");
    }
    

    /**
    * cria um lista com todas as cores cadastrada e cria a pagina com a mesma
    * @retun View listar
    */

    public function listarAction(){
        $view = array(
            'cores' => $this->cor->listar("cor")
        );
        
        $this->view->render('cor/listar', $view);
    }
    
    /**
    * cria a tela para cadastro e recebe os dados do formulario em seguida cadastra os mesmo
    * @retun View listar
    */

    public function cadastrarAction()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $cor = new StdClass();

            $cor->nome = $_POST['nome'];

            $this->cor->cadastrar($cor);
            
            $this->set_userdata('mensagem', 'Cor cadastrada.');
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
            
            $this->set_userdata('mensagem', 'Cor alterado.');
        }
    }
    
    public function excluirAction($id_cor)
    {
        
    }

    
}
