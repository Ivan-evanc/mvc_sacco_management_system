<?php
class Edit{
	function __construct(){
		if(isset($_POST['update'])){
			$firstname=$_POST['fname'];
			$lastname=$_POST['lname'];
			$email=$_POST['email'];
			$sacco=$_POST['sacco'];
			$connect=mysqli_connect('localhost','root','','demo');
			$query="UPDATE tbl_users SET first_name='$firstname',last_name='$lastname',sacco='$sacco' WHERE email='$email'";
			$result=mysqli_query($connect,$query);
				if($result){
				echo "<script>alert('Great!!,Admin $firstname Updated.')</script>";
		        echo "<script>location.href='../admin/list'</script>";

				}else{
				echo "<script>alert('Sorry!!, Updates failed. Try again later!')</script>";
		        echo "<script>location.href='../admin/list'</script>";

				}
			

		}else{
			header('Location: ../admin/list');
		}
	}
}



?>