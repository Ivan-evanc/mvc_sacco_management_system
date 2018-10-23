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
  $userid = $_SESSION['id'];
	
	
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs--><br><br><br>
      <div class="alert alert-info">
        <i class="fa fa-list"></i> Manage Vehicles
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
         
      <div style="height: 450px;">
        <div class="table table-responsive">

        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr class="text-info">
                <th>Vehicle Name</th>
                <th>Model</th>
                <th>Vehicle Registration</th>
                <th>Bussiness</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
          <tr id="search">
            <td><input type="text" name="name" class="form-control"></td>
            <td><input type="text" name="model" class="form-control"></td>
            <td><input type="text" name="registration" class="form-control"></td>
            <td><input type="text" name="business" class="form-control"></td>
            <td><input type="button" name="options" class="form-control btn btn-sm" readonly></td>
          </tr>
        <?php
        $connect=mysqli_connect('localhost','root','','demo');
        $query="SELECT * from tbl_vehicle WHERE user_id= '$userid' ORDER BY id DESC";
        $result=mysqli_query($connect,$query);
        ?>
        
          <?php while($row=mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?= $row['name'];?></td>
                <td><?= $row['model'];?></td>
                <td><span class="text-primary"><?= $row['registration'];?></span></td>
                <td><?= $row['bussiness'];?></td>
                <td>
                  <a href="../vehicle/more?reg=<?= $row['registration'];?>"><button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>
      </div>
    </div>
    <!-- /.container-fluid-->
</div>
<script type="text/javascript">
    $('#option').click(function(){
      alert('Hey clicked me');
    });
</script>
	
<?php require_once('layouts/footer.php'); ?>	

