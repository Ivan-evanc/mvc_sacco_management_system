<?php
class Update{
	function __construct(){
		if(isset($_POST['save'])){
			$firstname=$_POST['fname'];
			$lastname=$_POST['lname'];
			$email=$_POST['email'];
			$reg=$_POST['reg'];
			$connect=mysqli_connect('localhost','root','','demo');
			$query="UPDATE tbl_users SET first_name='$firstname',last_name='$lastname',vehicle_registration='$reg' WHERE email='$email'";
			$result=mysqli_query($connect,$query);
				if($result){
				echo "<script>alert('Great!!,Driver $firstname Updated.')</script>";
		        echo "<script>location.href='../driver/list'</script>";

				}else{
				echo "<script>alert('Sorry!!, Updates failed. Try again later!')</script>";
		        echo "<script>location.href='../driver/list'</script>";

				}
			

		}else{
			header('Location: ../driver/list');
		}
	}
}



?>