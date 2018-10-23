<?php
class sacco extends Controller{
	public function add(){
      $this->view->render('sacco/add');
	}

	public function submit(){
		require 'models/saccoModel/add.php';
		$model=new addSacco();
	}

	public function list(){
		$this->view->render('sacco/list');

	}

	public function edit(){
		$this->view->render('sacco/edit');
	}

	public function update(){
		require 'models/saccoModel/update.php';
		$model=new Update();
	}

	public function delete(){
		require 'models/saccoModel/remove.php';
		$model=new Remove();
	}
}

?>