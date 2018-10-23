<?php
class report extends Controller{
	public function expense(){
		$this->view->render('expense/list');
	}

	public function add(){
		$this->view->render('expense/add');
	}
}


?>