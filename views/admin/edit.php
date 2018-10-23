<?php 
	session_start();
	
	if(!isset($_SESSION['id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}		
	 $connect=mysqli_connect('localhost','root','','demo');
	require_once('inc/config.php');
	require_once('layouts/header.php'); 
	require_once('layouts/left_sidebar.php'); 

  $email=$_GET['email'];
  $query="SELECT * from tbl_users WHERE email='$email'";
  $executeQuery=mysqli_query($connect,$query);
  $assoc=mysqli_fetch_assoc($executeQuery);	
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs--><br><br>
      <div class="alert alert-info">
        Edit admin <?php echo $assoc['first_name'];?>
      </div><hr> 
      <div style="height: 530px;">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-7">
            <div class="panel panel-default">
            <div class="panel-body">
              <form action="../admin/update" method="POST">
              <label>First name<span class="text-danger"> *</span></label>
              <input type="text" name="fname" class="form-control" value="<?php echo $assoc['first_name'];?>" required><br>

              <label>Last name<span class="text-danger"> *</span></label>
              <input type="text" name="lname" class="form-control" value="<?php echo $assoc['last_name'];?>" required><br>

              <label>Email Address<span class="text-danger"> *</span></label>
              <input type="email" name="email" class="form-control" value="<?php echo $assoc['email'];?>" readonly><br>

              <label>ID number<span class="text-danger"> *</span></label>
              <input type="number" name="id" class="form-control" value="<?php echo $assoc['id'];?>" readonly><br>
              <?php
             
              $querySelect="SELECT sacconame from sacco WHERE sacconame NOT IN(SELECT sacco FROM tbl_users)";
              $resultSet=mysqli_query($connect,$querySelect);

              ?>
              <label>Assign Sacco</label>
              <select class="form-control" name="sacco">
                <option><?php echo $assoc['sacco'];?></option>
                <?php while($row=mysqli_fetch_assoc($resultSet)){?>
                <option><?php echo $row['sacconame'];?></option>
                <?php } ?>

              </select><br>

              <button class="btn btn-warning btn-sm">Manage admins</button>
              <span class="pull-right"><button class="btn btn-primary btn-sm" name="update">Update</button></span>
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
	
