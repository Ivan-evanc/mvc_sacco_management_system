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
        <i class="fa fa-plus"></i>Add Expense 
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
         
      <div style="height: 420px;">

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

