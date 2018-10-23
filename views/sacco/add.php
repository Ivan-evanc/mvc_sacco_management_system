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
        Create Sacco
      </div>
      <hr>
 
      
      <div style="height: 450px;">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-6">
            <div class="panel panel-default">
            <div class="panel-body">
              <form action="../sacco/submit" method="POST">
              <label><small>Sacco name</small></label>
              <input type="text" name="name" class="form-control" placeholder="Enter Sacco name." required><br>

              <label><small>Sacco ID</small></label>
              <input type="number" name="id" class="form-control" placeholder="Enter Sacco ID." required><br>

              <label><small>Sacco Location</small></label>
              <input type="text" name="location" class="form-control" placeholder="Enter Sacco Location." required><br>

              <label><small>Sacco Region</small></label>
              <input type="text" name="region" class="form-control" placeholder="Enter Sacco Region." required><br>

              <button class="btn btn-info btn-block" name="submit" style="border-radius: 12px;">Submit Information</button>
               </form>

            </div>
          </div>
          </div>

           <div class="col-sm-5"></div>
          
        </div>
     

      </div>

    </div>
  </div>
  <?php require_once('layouts/footer.php'); ?>  
	
