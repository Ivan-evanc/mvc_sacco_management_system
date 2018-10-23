<?php
class Session{
	function __construct(){
		session_start();
		$_SESSION['email']=$row['email'];
		$_SESSION['role']=$row['role'];
	}
}
?>