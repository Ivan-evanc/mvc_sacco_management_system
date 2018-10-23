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
        <i class="fa fa-list"></i> Expense List
      </div><hr>
      <div>
        <a href="../report/add"><button class="btn btn-info"><i class="fa fa-plus"></i> Add Expense</button></a>
      </div><br>

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
         
      <div style="height: 420px;">
        <div class="table table-responsive">

        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr class="text-primary">
                <th>SNO.</th>
                <th>Driver Name</th>
                <th>Expense Cost</th>
                <th>Category</th>
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

