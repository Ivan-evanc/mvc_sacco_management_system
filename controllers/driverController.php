<?php
class driver extends Controller{
	public function add(){
    $this->view->render('driver/create');
	}

	public function insert(){
		require 'models/driverModel/add.php';
		$model=new Make();
	}

	public function list(){
		$this->view->render('driver/list');
	}

	public function edit(){
		$this->view->render('driver/edit');
	}

	public function update(){
	require 'models/driverModel/update.php';
	$model=new Update();

	}
}


?>