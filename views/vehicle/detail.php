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

  $regNo=$_GET['reg'];
  $connect=mysqli_connect('localhost','root','','demo');
  $query="SELECT * FROM tbl_vehicle WHERE registration='$regNo'";
  $result=mysqli_query($connect,$query);
  $data=mysqli_fetch_assoc($result);
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs--><br><br><br>
      <div class="alert alert-info">
       Vehicle <?= $data['name']?> details
      </div>
      <hr>
 
      
      <div style="height: 480px;">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5">
            <div class="panel panel-default">
            <div class="panel-body">
              <form action="../vehicle/add" method="POST" enctype="multipart/form-data">
              <label>Vehicle name</label>
              <input type="text" name="vname" class="form-control" value="<?= $data['name'];?>" required><br>

              <label>Vehicle model</label>
              <input type="text" name="model" class="form-control"  value="<?= $data['model'];?>" required><br>

              <label>Vehicle Registration</label>
              <input type="text" name="registration" class="form-control" value="<?= $data['registration'];?>" readonly><br>

              <label>Bussiness</label>
              <input type="text" name="bussiness" class="form-control"  value="<?= $data['bussiness'];?>" ><br>

               <span><i classs="fa fa-arrow-left"></i><a href="../vehicle/list">Go back to list</a></span>
               </form>
     <br>
            </div>
          </div>
          </div>

           <div class="col-sm-6"><br>
             <div style="width:400px;border:1px solid lightgray;text-align: center;" >
               <span>
                 <img src="<?= $data['image'];?>" width="400px" height="320px" alt="image failed to load."class="img-thumbnail">
               </span>
             </div>
           </div>
          
        </div>
     

      </div>
    </div>
  </div>
	
<?php require_once('layouts/footer.php'); ?>	