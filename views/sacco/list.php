<?php 
	session_start();
	
	if(!isset($_SESSION['id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}		
	
	require_once('inc/config.php');
	require_once('layouts/header.php'); 
	require_once('layouts/left_sidebar.php'); 
	
	
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs--><br><br><br>
     <div class="alert alert-info">
       Manage Saccos
     </div>
     <hr>
      <div style="height: 450px;">
      <?php

 if(!empty($_GET['status'])) 

    {  
      $name=$_SESSION['name'];   
  $status = $_GET['status']; 
  if($status=="true") 
     { 
 echo "<script type='text/javascript'>";

echo "$(document).ready(function(){
        $('.progress').animate({ width: '100%' }, 1000);
      });";

echo "</script>";       
      
echo "

   <div class='alert alert-info alert-dismissable' style='color: green;'>
   <span class='close' data-dismiss='alert' aria-label='close'>&times</span><h4>Great!! <b>".$name."</b> sacco added successully</h4>";
   echo "</div>";
} 
}
 ?>
         
      <div class="table table-responsive">

      	<table id="myTable" class="table table-striped table-bordered" style="border: 1px solid #ddd;">
          <thead>
            <tr class="text-info">
              <th>Sacco ID</th>
              <th>Sacco Name</th>
              <th>Location</th>
              <th>Region</th>
              <th>Admin</th>
              <th>Options</th>
            </tr>
          </thead>
           <tbody id="mytable">
           	<?php
           	$connect=mysqli_connect('localhost','root','','demo');
           	$query="SELECT * from sacco ORDER BY id ASC";
           	$result=mysqli_query($connect,$query);
            while($row=mysqli_fetch_assoc($result)){
              $sacco=$row['sacconame'];
              $queryAdmin="SELECT * from admin WHERE sacco='$sacco'";
              $resultSet=mysqli_query($connect,$queryAdmin);
              $fetchAssoc=mysqli_fetch_assoc($resultSet);
           	?>
           	<tr>
          
           		<td><u><?php echo $row['saccoid'];?></u></td>
           		<td><?php echo $row['sacconame'];?></td>
           		<td><?php echo $row['saccolocation'];?></td>
           		<td><?php echo $row['saccoregion'];?></td>
           		<td><span class="label label-info"><?php echo $fetchAssoc['firstname'];?></span></td>
           		<td>
           			<a href="../sacco/edit?saccoid=<?php echo $row['saccoid'];?>"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
           			<a href="../sacco/delete?saccoid=<?php echo $row['saccoid'];?>"><button type="button" id="del" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
           		</td>
           	</tr>
           	<?php } ?>


           </tbody>
       </table>
       
      
      </div>
    </div>

    </div>
  </div>



    <?php require_once('layouts/footer.php'); ?> 
    <!-- /.container-fluid-->
	
