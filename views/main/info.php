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
      System Info.
    </div>
  
      <hr>
      <div class="panel panel-primary">
      	<div class="panel-body">
      		Sorry, No info at the moment
      	</div>
      	
      </div>
   
      
      <div style="height: 450px;"></div>
    </div>
  </div>
    <!-- /.container-fluid-->
<?php require_once('layouts/footer.php'); ?>	
