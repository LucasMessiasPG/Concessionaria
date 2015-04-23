<?php

class View {

	public function render($uri, $parametros = '')
	{
        if(is_array($parametros) && count($parametros)>0){
            foreach ($parametros as $key => $value){
                $$key = $value;
            }
        }
		require VIEW . '/' . $uri . '.php';
	}
    
    public function userdata($chave)
    {
        $session = isset($_SESSION[$chave]) ? $_SESSION[$chave] : '';
        
        if(isset($_SESSION[$chave]))
            unset($_SESSION[$chave]);
        
        return $session;
    }
    
    public function set_userdata($chave, $data)
    {
        return $_SESSION[$chave] = $data;
    }

}
