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

      $role = $_SESSION['user_role_id'];
	
	
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs--><br><br><br>
      <div class="alert alert-info">
      	Dashboard
      	<span class="pull-right"><strong><?php echo getUserAccessRoleByID($_SESSION['user_role_id']); ?> Account</strong></span>
      </div>
      <hr>
      <div style="height: 450px;">
      	<div class="container">

                  <!--begin-->
                    <?php if($role=="1"){ ?>
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                  <div class="mr-5">Saccos</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="../sacco/list">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-user"></i>
                  </div>
                  <div class="mr-5">Admins</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="../admin/list">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-globe"></i>
                  </div>
                  <div class="mr-5">Vehicle</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="../vehicle/view">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-edit"></i>
                  </div>
                  <div class="mr-5">Drivers</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="../driver/list">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <hr>

        <?php } ?>


                 <?php if($role=="2"){ ?>
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-globe"></i>
                  </div>
                  <div class="mr-5">Vehicle</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="../vehicle/view">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-edit"></i>
                  </div>
                  <div class="mr-5">Drivers</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="../driver/list">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <hr>

        <?php } ?>


                  <!--end-->
      	
            
      	</div>
      </div>
    </div>
</div>
    <!-- /.container-fluid-->
	
<?php require_once('layouts/footer.php'); ?>	