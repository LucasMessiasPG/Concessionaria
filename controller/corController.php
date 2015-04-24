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
    
    /**
    * tela para alterar a cor
    * @retun View alterar
    */

    public function alterarAction($id_cor = '')
    {
        $cor = $this->validacao($id_cor);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $cor = new StdClass();

            $cor->nome = $_POST['nome'];
            $cor->id_cor = $id_cor;

            if($this->cor->alterar($cor))
                $this->set_userdata('mensagem', 'Cor alterado.');
            else
                $this->set_userdata('error', 'Erro ao alterar Cor.');
        }

        $view = array(
            'cor' => $cor
        );

        $this->view->render('cor/alterar', $view);
    }
    
    public function excluirAction($id_cor = '')
    {
        $cor = $this->validacao($id_cor);

        if($mensagem = $this->cor->excluir($id_cor)){
            $this->set_userdata('mensagem', $mensagem);

            $view = array('voltar' => 'cor/listar');

            $this->view->render('excluir', $view);
        } else {
            $this->redirect('cor/listar');
        }
    }

    protected function validacao($id_cor)
    {
        $cor = $this->cor->get($id_cor);

        if(!($id_cor > 0) || !$cor)
            $this->redirect('veiculo/listar');

        return $cor;
    }
}
