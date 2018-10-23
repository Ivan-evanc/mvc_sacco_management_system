<?php
class admin extends Controller{
	public function add(){
		$this->view->render('admin/add');
	}
	public function submit(){
		require 'models/adminModel/add.php';
		$model=new createAdmin();
	}

	public function list(){
		$this->view->render('admin/list');
	}

	public function edit(){
		$this->view->render('admin/edit');
	}

	public function update(){
		require 'models/adminModel/edit.php';
		$model=new Edit();

	}
}


?>