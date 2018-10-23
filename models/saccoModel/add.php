<?php
class addSacco{
	function __construct(){
		if(isset($_POST['submit'])){
			$saccoName=$_POST['name'];
			$saccoID=$_POST['id'];
			$saccoLocation=$_POST['location'];
			$saccoRegion=$_POST['region'];

			if(!empty($saccoName)&&!empty($saccoID)&&!empty($saccoLocation)&&!empty($saccoRegion)){
				$connect=mysqli_connect('localhost','root','','demo');
				$query="INSERT into sacco(sacconame,saccoid,saccolocation,saccoregion) 
				VALUES('$saccoName','$saccoID','$saccoLocation','$saccoRegion')";

				$result=mysqli_query($connect,$query);
				if($result){
			     header('Location: ../sacco/list?status=true');
			     session_start();
			     $_SESSION['name']=$saccoName;
				}else{
			    echo "<script>alert('Sorry!!, Unable to add the infomation')</script>";
		        echo "<script>location.href='../sacco/add'</script>";
				}

			}else{
				echo "<script>alert('Sorry!!, All fields should not be null')</script>";
		        echo "<script>location.href='../sacco/add'</script>";
			}
		}
	}
}
?>