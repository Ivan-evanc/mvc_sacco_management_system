<?php
class Update{
	function __construct(){
		if(isset($_POST['update'])){
			$saccoName=$_POST['name'];
			$saccoID=$_POST['id'];
			$saccoLocation=$_POST['location'];
			$saccoRegion=$_POST['region'];

			if(!empty($saccoName)&&!empty($saccoID)&&!empty($saccoLocation)&&!empty($saccoRegion)){
				$connect=mysqli_connect('localhost','root','','demo');
				$query="UPDATE sacco SET sacconame='$saccoName',saccolocation='$saccoLocation', saccoregion='$saccoRegion'
				 WHERE saccoid='$saccoID'";

				$result=mysqli_query($connect,$query);
				if($result){
			    echo "<script>alert('Updates made successfully.')</script>";
		        echo "<script>location.href='../sacco/list'</script>";
				}else{
			    echo "<script>alert('Sorry!!, Unable to update the infomation')</script>";
		        echo "<script>location.href='../sacco/edit'</script>";
				}

			}else{
				echo "<script>alert('Sorry!!, All fields should be filled')</script>";
		        echo "<script>location.href='../sacco/add'</script>";
			}
			
		}else{
			header('Location: ../sacco/list');
		}
	}
}


?>