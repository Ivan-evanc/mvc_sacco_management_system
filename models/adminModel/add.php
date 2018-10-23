<?php
class createAdmin{
	function __construct(){
		if(isset($_POST['admin'])){
			$firstname=$_POST['fname'];
			$lastname=$_POST['lname'];
			$email=$_POST['email'];
			$sacco=$_POST['sacco'];
			$password="1234";

			if(!empty($firstname)&&!empty($lastname)&&!empty($email)){
				$connect=mysqli_connect('localhost','root','','demo');
				$query="INSERT INTO tbl_users(first_name,last_name,email,user_role_id,sacco,password) 
				VALUES('$firstname','$lastname','$email',2,'$sacco','$password')";
				$result=mysqli_query($connect,$query);
				if($result){
				echo "<script>alert('Great!!, Admin ".$firstname. " ".$lastname." Added to the system')</script>";
		        echo "<script>location.href='../admin/add'</script>";

				}else{
				echo "<script>alert('Sorry!!, Admin not added to the system. try again later')</script>";
		        echo "<script>location.href='../admin/add'</script>";

				}

			}else{
				echo "<script>alert('Sorry!!, All fields with red starred should be filled')</script>";
		        echo "<script>location.href='../admin/add'</script>";
			}
			

		}
	}
}



?>