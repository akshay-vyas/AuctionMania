<header class="main-header">
    <!-- Logo -->
    <a href="main_home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><h4>MESQ</h4></span>
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
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu" >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
              <img src="dist/img/avatar04.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php include('dbconnect.php'); session_start(); echo $_SESSION['email']; echo $_SESSION['mid']; ?></span>
            </a>
            <ul class="dropdown-menu" style="box-shadow: 0 8px 12px 3px #888888;">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar04.png" class="img-circle" alt="User Image">

                <p>
                  <?php  echo $_SESSION['email']; ?>
                  <small>any details of merhcant</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row" >
                  <div class="col-xs-4 text-center">
                    <a href="quatation_recieved_view.php">ACCEPTED</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="quatation_completed.php">COMPLETED</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="quatation_decline_view.php">DECLINE</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="main_home.php" class="btn btn-primary btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-danger btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
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
          <p></p>
          <a href="#"></a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"></li>
        <li class="active treeview">
          <a href="main_home.php">
            <i class="fa fa-dashboard"></i> <span>Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>		

				<?php
				$conn=mysqli_connect('localhost','root','','init');
				//mysqli_select_db('init',$conn);
				$catsql="select * from cat_table";
				$catres=mysqli_query($conn,$catsql);
				while($catrow=mysqli_fetch_assoc($catres))
				{
				?>
<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span><?php echo $catrow['cat_name']; $temp=$catrow['cid'];?></span>
        		
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

				
						<?php 
						$subsql="select * from sub_cat_table where cid='$temp'";
						$subres=mysqli_query($conn,$subsql);
						while($subrow=mysqli_fetch_array($subres))
						{
						?>
						
						          <ul class="treeview-menu">
            <li><a href="display_vendor.php?dis=<?php echo $subrow['id'];?>"><i class="fa fa-circle-o"></i><?php echo $subrow['sub_cat_name'];?></a></li>

          
		  </ul>
		  <?php
						}
						?>
						
					
					</li>
				<?php
				}
				?>

		<li>
          <a href="quatation_sent_view.php">
            <i class="fa fa-th-large"></i> <span>Sent Quatation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		<li>
          <a href="quatation_recieved_view.php">
            <i class="fa fa-th-large"></i> <span>Accepted Quatation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="quatation_completed.php">
            <i class="fa fa-th-large"></i> <span>Completed Quatation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		<li>
          <a href="quatation_decline_view.php">
            <i class="fa fa-th-large"></i> <span>Decline Quatation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		
      <li>
          <a href="reset_pwd.php">
            <i class="fa fa-th-large"></i> <span>Reset Password</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		
        <!--<li>
          <a href="subcat_list.php">
            <i class="fa fa-th-large"></i> <span>Sub-Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		
		
		<li>
          <a href="march_list.php">
            <i class="fa fa-th-large"></i> <span>Marchant</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Vendor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i>Request</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Conform</a></li>
          </ul>
        </li>
        <li>
		
		
		<li>
          <a href="add_admin.php">
            <i class="fa fa-th-large"></i> <span>Add Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>-->
		
		
		<!--- <li class="treeview">
          <a href="users.php">
            <i class="fa fa-users"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="coupan.php">
            <i class="fa fa-edit"></i> <span>coupans</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>---->
    <!--    <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="documentation/home.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside> 