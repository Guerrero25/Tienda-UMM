<?php

class Main extends Controller{

	public function index(){
		$this->view->render($this, "home",'');
	}

	public function about(){

	}
}

?>
