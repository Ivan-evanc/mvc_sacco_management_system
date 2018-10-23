<?php
class addVehicle{
	function __construct(){
		if(isset($_POST['insert'])){
			$userid = $_GET['user_id'];

			$name=$_POST['name'];
			$email = $_POST['email'];
			$password = "1234";
			$md5password = md5($password);


			$model=$_POST['model'];
			$register=$_POST['registration'];

			$target="http://localhost/systems/m_vehicle/uploads/".basename($_FILES['image']['name']);
			$targ="uploads/".basename($_FILES['image']['name']);

			$connect=mysqli_connect('localhost','root','','demo');
			$query="INSERT into tbl_vehicle(model,registration,user_id,image)
			VALUES('$model','$register','$userid','$target')";

			$UserQuery ="INSERT into tbl_users(first_name,email,password,vehicle_registration) VALUES('$name','$email','$md5password','$register')";
			mysqli_query($connect,$UserQuery);

			$result=mysqli_query($connect,$query);
			if($result){
				if(move_uploaded_file($_FILES["image"]["tmp_name"], $targ)){
				echo "<script>alert('Great!!, Whole details added to the system.')</script>";
		        echo "<script>location.href='../vehicle/list'</script>";

				}else{
				echo "<script>alert('Sorry!!, Unable to add image to the system.Only texts updated.')</script>";
		        echo "<script>location.href='../vehicle/add'</script>";
				}

			}else{
				echo "<script>alert('Sorry!!, Unable to add the infomation')</script>";
		        echo "<script>location.href='../sacco/add'</script>";
			}


		}else{
			header('Location: ../vehicle/list');
		}

	}
}


?>