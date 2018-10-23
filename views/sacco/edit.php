<?php  
$saccoid=$_GET['saccoid'];
session_start();
	
	if(!isset($_SESSION['id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}		
	
	require_once('inc/config.php');
	require_once('layouts/header.php'); 
	require_once('layouts/left_sidebar.php'); 

	$connect=mysqli_connect('localhost','root','','demo');
	$query="SELECT * from sacco WHERE saccoid='$saccoid'";
	$result=mysqli_query($connect,$query);
	$row=mysqli_fetch_assoc($result);
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs--><br><br><br>
      <div class="alert alert-info">
        Edit <?php echo $row['sacconame'];?> Sacco
      </div>
      <hr>
 
      
      <div style="height: 450px;">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-6">
            <div class="panel panel-default">
            <div class="panel-body">
              <form action="../sacco/update" method="POST">
              <label><small>Sacco name</small></label>
              <input type="text" name="name" class="form-control" value="<?php echo $row['sacconame']; ?>" required><br>

              <label><small>Sacco ID</small></label>
              <input type="number" name="id" class="form-control" value="<?php echo $row['saccoid']; ?>" readonly><br>

              <label><small>Sacco Location</small></label>
              <input type="text" name="location" class="form-control" value="<?php echo $row['saccolocation']; ?>" required><br>

              <label><small>Sacco Region</small></label>
              <input type="text" name="region" class="form-control" value="<?php echo $row['saccoregion']; ?>" required><br>

              <span><a href="../sacco/list"><button class="btn btn-warning btn-sm">View Sacco</button></a></span>
              <span class="pull-right"><button class="btn btn-info btn-sm" name="update" style="border-radius: 12px;">Update</button></span>
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
	
