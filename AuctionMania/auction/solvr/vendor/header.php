<header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MESQ</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MESHCUE</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
	  <!---<i class="glyphicon glyphicon-chevron-left"></i>--->
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php session_start(); echo $_SESSION['email'];?>
              <img src="dist/img/avatar04.png" class="user-image" alt="User Image">
              <span class="hidden-xs">
			  </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar04.png" class="img-circle" alt="User Image">

                <p>
                  Solvr
                  <!---<small>Print it</small>-->
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar04.png" class="img-circle" alt="User Image">
		  
        </div>
        <div class="pull-left info">
          <p> <h5><?php  echo $_SESSION['email'];?></h5></p>
          <a href="#"></a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu"> 
        <li class="header">Menu</li>
        <li class="active treeview">
          <a href="home.php">
            <i class="fa fa-dashboard"></i> <span>Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		

		<li class="treeview">
          <a href="enquiry_view.php">
            <i class="fa fa-table"></i> <span> Requested Enquiry</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
		<li class="treeview">
          <a href="enquiry_replied_view.php">
            <i class="fa fa-table"></i> <span>Accepted Enquiery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
		<li class="treeview">
          <a href="enquiry_decline_view.php">
            <i class="fa fa-table"></i> <span>Rejected Enquiery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>

        <li class="treeview">
          <a href="reset_pwd.php">
            <i class="fa fa-table"></i> <span>Reset Password</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
		

		
		
		
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside> 