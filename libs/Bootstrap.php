<?php
class Bootstrap{
function __construct(){
$url=isset($_GET['url'])? $_GET['url']:null;
$url=rtrim($url,'/');
$url=rtrim($url,'.php');
$url=explode('/', $url);

$file='controllers/'.$url[0].'Controller'.'.php';
if(file_exists($file)){
	require $file;
	$controller=new $url[0];
	}else{
	require 'controllers/indexController.php';
	$controller=new index();
	return false;	
}

if(isset($url[2])){
	
		$controller->{$url[1]}($url[2]);
	    return false;
	    exit();	
	
}

if(@isset($url[1])){	
	$controller->{$url[1]}();
	exit();

}

}
}


?>