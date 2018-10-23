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
      <!-- Breadcrumbs--><br><br>
      <div class="alert alert-info">
        <i class="fa fa-plus"></i> Create Driver
      </div><hr>

      
      <div style="height: 450px;">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-7">
            <div class="panel panel-default">
            <div class="panel-body">
              <form action="../driver/insert" method="POST">
              <label>First name<span class="text-danger"> *</span></label>
              <input type="text" name="fname" class="form-control" placeholder="Enter First Name." required><br>

              <label>Last name<span class="text-danger"> *</span></label>
              <input type="text" name="lname" class="form-control" placeholder="Enter Last Name." required><br>

              <label>Email Address<span class="text-danger"> *</span></label>
              <input type="email" name="email" class="form-control" placeholder="Enter Email." required><br>
              <?php
              $connect=mysqli_connect('localhost','root','','demo');
              $querySelect="SELECT registration from tbl_vehicle WHERE registration NOT IN(SELECT vehicle_registration FROM tbl_users)";
              $resultSet=mysqli_query($connect,$querySelect);

              ?>
              <label>Assign vehicle</label>
              <select class="form-control" name="sacco">
                <option>--Select the Sacco--</option>
                <?php while($row=mysqli_fetch_assoc($resultSet)){?>
                <option><?php echo $row['registration'];?></option>
                <?php } ?>

              </select><br>

              <span class="pull-right"><button class="btn btn-info" name="admin" style="border-radius: 10px;">Add driver</button></span>
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
	
