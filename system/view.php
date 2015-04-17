<?php

class View {

	public function render($uri, array $parametros)
	{
		foreach ($parametros as $key => $value) {
			$$key = $value;
		}

		require VIEW . '/' . $uri . '.php';
	}

}