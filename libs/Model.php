<?php
class Model{
	function __construct(){
		$connect=mysqli_connect('localhost','root','','easylife_i_drink');
		if(!$connect){
			echo "No connected";
		}
	}
}


?>