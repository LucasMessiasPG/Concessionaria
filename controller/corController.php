<?php

class corController extends Controller {
    
    private $cor; 
    
    public function __construct()
    {
        parent::__construct();
        
        $this->cor = $this->model('cor');
    }
    
    public function cadastrarAction()
    {
        
    }
    
    public function alterarAction($id_cor)
    {
        
    }
    
    public function excluirAction($id_cor)
    {
        
    }
    
}