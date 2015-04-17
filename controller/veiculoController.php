<?php

class veiculoController extends Controller {
    
    private $veiculo; 
    
    public function __construct()
    {
        parent::__construct();
        
        $this->veiculo = $this->model('veiculo');
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