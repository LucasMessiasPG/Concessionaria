<?php

class modeloController extends Controller {
    
    private modelo; 
    
    public function __construct()
    {
        parent::__construct();
        
        $this->modelo = $this->model('modelo');
    }
    
    public function cadastrarAction()
    {
        
    }

    
} 