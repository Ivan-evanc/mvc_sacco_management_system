<?php
class Remove{
	function __construct(){
      if(!empty($_GET['saccoid'])){
        $saccoid=$_GET['saccoid'];
        $connect=mysqli_connect('localhost','root','','demo');
        $query="DELETE from sacco WHERE saccoid='$saccoid'";
        $result=mysqli_query($connect,$query);
        if($result){
         echo "<script>alert('Sacco $saccoid deleted from system')</script>";
		 echo "<script>location.href='../sacco/list'</script>";

        }else{
          echo "<script>alert('Sorry!! Unable to delete a sacco.')</script>";
		  echo "<script>location.href='../sacco/list'</script>";

        }
      }else{
      	header('location: ../sacco/list');
      }
	}
}
?>