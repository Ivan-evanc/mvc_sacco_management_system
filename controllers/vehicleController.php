<?php
class vehicle extends Controller{
	public function create(){
      $this->view->render('vehicle/add');
	}

	public function view(){
		$this->view->render('vehicle/list');
	}

	public function add(){
		require 'models/vehicleModel/insert.php';
		$model=new addVehicle();
	}

	public function list(){
		$this->view->render('vehicle/list');
	}

	public function more(){
		$this->view->render('vehicle/detail');
	}
}

?>