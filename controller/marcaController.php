<?php

class marcaController extends Controller {
    
    private $marca; 
    
    public function __construct()
    {
        parent::__construct();
        
        $this->marca = $this->model('marca');
    }
    
    public function cadastrarAction()
    {
        
    }
    
    public function alterarAction($id_veiculo)
    {
        
    }
    
    public function excluirAction($id_veiculo)
    {
        
    }
    
}