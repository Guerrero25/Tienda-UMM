<?php 

class Response{
	private function __construct(){}

	public static function renderDetalles($view, $vars = []){
		/*foreach ($vars as $key => $value) {
			$$key = $value;
		}*/
		require APP_PATH."views/Detalles/".$view.".php";
	}

	public static function renderHome($view){
		require APP_PATH."views/".$view.".php";
	}

}


?>