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
        Add Vehicle
      </div>
      <hr>
 
      
      <div style="height: 500px;">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-7">
            <div class="panel panel-default">
            <div class="panel-body">
              <form action="../vehicle/add?user_id=<?= $userid?>" method="POST" enctype="multipart/form-data">
              <label>Owner's name<span class="text-danger"> *</span></label>
              <input type="text" name="name" class="form-control" placeholder="Enter the name" required><br>

               <label>Owner Email</label>
              <input type="text" name="email" class="form-control" Placeholder="Enter business type."><br>

              <label>Vehicle model<span class="text-danger"> *</span></label>
              <input type="text" name="model" class="form-control" placeholder="Enter the model." required><br>

              <label>Vehicle Registration<span class="text-danger"> *</span></label>
              <input type="text" name="registration" class="form-control" placeholder="Enter vehicle registration No." Required><br>
              
              <label>Image</label>
              <input type="file" name="image" class="form-control"/><br>

              <button class="btn btn-primary btn-block" name="insert" style="border-radius: 10px;"><i class="fa fa-plus"></i> Add Vehicle</button>
               </form>
     <br>
            </div>
          </div>
          </div>

           <div class="col-sm-4"></div>
          
        </div>
     

      </div>
    </div>
  </div>
	
<?php require_once('layouts/footer.php'); ?>	