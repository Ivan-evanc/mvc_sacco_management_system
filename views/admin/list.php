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
        Manage Admin
      </div><hr>

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
   <span class='close' data-dismiss='alert' aria-label='close'>&times</span><h4><big>".$name."</big> sacco added successully</h4>";
   echo "</div>";
} 
}
 ?>
         
      <div style="height: 550px;">
      <div class="table table-responsive">
      	<table id="dataTable" class="table table-striped table-bordered" style="border: 1px solid #ddd;">
          <thead>
            <tr class="text-info">
              <th>Admin id</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Sacco</th>
              <th>Options</th>
            </tr>
          </thead>
           <tbody id="mytable">
           	<?php
           	$connect=mysqli_connect('localhost','root','','demo');
           	$query="SELECT * from tbl_users WHERE user_role_id='2' ORDER BY id ASC";
           	$result=mysqli_query($connect,$query);
            while($row=mysqli_fetch_assoc($result)){
           	?>
           	<tr>
              <td><?php echo $row['id'];?></td>
           		<td><?php echo $row['first_name']. " ".$row['last_name'];?></td>
           		<td><?php echo $row['email'];?></td>
           		<td><?php echo $row['sacco'];?></td>
           		<td>
           			<a href="../admin/edit?email=<?php echo $row['email'];?>"><button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
           		</td>
           	</tr>
           	<?php } ?>


           </tbody>
       </table>
        </div>
      </div>
    </div>
    <script type="text/javascript">
  $(document).ready(function(){
    $('#order_data').DataTable();
  });
</script>
    <!-- /.container-fluid-->
	
<?php require_once('layouts/footer.php'); ?>	

