<?php
class index extends Controller{
	function __construct(){
		$this->view=new View();
		$this->view->render('index',1);

	}

	
}

?>