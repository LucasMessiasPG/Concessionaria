<?php

class View {

	public function render($uri, $parametros = '')
	{
        if(is_array($parametros) && count($parametros)>0)
            foreach ($parametros as $key => $value)
                $$key = $value;

		require VIEW . '/' . $uri . '.php';
	}

}