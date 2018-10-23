<?php
class main extends Controller{

	public function dashboard(){
		$this->view->render('main/dashboard');
	}

	public function info(){
		$this->view->render('main/info');
	}

	public function Logout(){
		$this->view->render('main/Logout');
	}
}

?>