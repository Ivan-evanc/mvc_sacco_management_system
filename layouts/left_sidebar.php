 <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashboard.php"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <span style="color: white;"><big>M-vehicle system</big></span>
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="../main/dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
		<?php 
		//only visible to admin and editor
		if($_SESSION['user_role_id'] == 4){?>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Notificaions">
        <a class="nav-link" href="../main/info">
        <i class="fa fa-fw fa-circle-o-notch"></i>
        <span class="nav-link-text">Notifications</span>
        </a>
      </li>


		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Report">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseReports" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Reports</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseReports">
            <li>
              <a href="../report/expense">Daily Expense</a>
            </li>
            <li>
              <a href="#">Revenue Collected</a>
            </li>
          </ul>
        </li>
	
		
		<?php }?>
		
		<?php 
		//only visible to admin and editor
		if($_SESSION['user_role_id'] == 3 ){?>

         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseReport" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Reports</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseReport">
            <li>
              <a href="#">View Expenses</a>
            </li>
            <li>
              <a href="#">View Revenues</a>
            </li>
          </ul>
        </li>


    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSaccoView" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Sacco</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseSaccoView">
            <li>
              <a href="#">View Sacco</a>
            </li>
          </ul>
        </li>




		
        
  
		<?php } ?>
    <?php
    if($_SESSION['user_role_id']==2){?>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseOwn" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Vehicle</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseOwn">
            <li>
              <a href="../vehicle/create">Add Vehicle</a>
            </li>
            <li>
              <a href="../vehicle/view">List Vehicle</a>
            </li>
          </ul>
        </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapselistDrivers" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Driver</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapselistDrivers">
            <li>
              <a href="../driver/add">Add Driver</a>
            </li>
            <li>
              <a href="../driver/list">List Drivers</a>
            </li>
          </ul>
        </li>



    <?php } ?>
		<?php 
	
		if($_SESSION['user_role_id'] == 1){?>
	       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sacco session">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSacco" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Sacco</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseSacco">
            <li>
              <a href="../sacco/add">Add Sacco</a>
            </li>
            <li>
              <a href="../sacco/list">List Saccos</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="admin module">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseOwner" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Admin</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseOwner">
            <li>
              <a href="../admin/add">Add Admin</a>
            </li>
            <li>
              <a href="../admin/list">List Admin</a>
            </li>
          </ul>
        </li>

               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="management">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseDriver" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Management</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseDriver">
            <li>
              <a href="../vehicle/view">View Vehicle</a>
            </li>

              <li>
              <a href="../driver/list">View Driver</a>
            </li>
          </ul>
        </li>
		
		<?php
		}
		?>
        
      </ul>
     
	 
	 
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="../main/Logout">
            <i class="fa fa-fw fa-sign-out"></i>Logout
		  </a>
        </li>
      </ul>
    </div>
  </nav>