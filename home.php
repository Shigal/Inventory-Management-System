<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/w3style.css">
    <title>IMS</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
	  
      <header class="main-header hidden-print"><a href="home.php" class="logo">IMS</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a href="#" data-toggle="offcanvas" class="sidebar-toggle"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->

              <!-- User Menu-->
			  <li  class="not-head" >
		<?php
	ob_start();
	session_start();
	require_once 'dbconfig.php';

	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$id =$_SESSION['user'];
	$sql = "SELECT * FROM signup WHERE username='$id'";
	$res=mysqli_query($conn,$sql);
	$userRow=mysqli_fetch_array($res);
	$name = $userRow['username'];
	echo "$name"
?>

			  </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">





                  <li><a href="logout.php?logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img src="images/logo.jpg" alt="User Image" class="img-circle"></div>
            <div class="pull-left info">

              <p class="designation">University of Jaffna.</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="home.php"><i class="fa fa-dashboard"></i><span>Home</span></a></li>

            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Inventory</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="lab.php"><i class="fa fa-circle-o"></i>Lab</a></li>
                <li><a href="office.php"><i class="fa fa-circle-o"></i>Office</a></li>
				<li><a href="fur.php"><i class="fa fa-circle-o"></i>Furniture</a></li>
                <li><a href="consu.php"><i class="fa fa-circle-o"></i>Consumble</a></li>
				</ul>
            </li>
			   <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Maintenance</span><i class="fa fa-angle-right"></i></a>
			   <ul class="treeview-menu">
                <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Send</span><i class="fa fa-angle-right"></i></a>
				 <ul class="treeview-menu">
                <li><a href="loan.php"><i class="fa fa-circle-o"></i>Loan</a></li>
                <li><a href="trans.php"><i class="fa fa-circle-o"></i>Transfer</a></li>
				</ul>

				<li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Received</span><i class="fa fa-angle-right"></i></a>
				 <ul class="treeview-menu">
                <li><a href="loan_rcvd.php"><i class="fa fa-circle-o"></i>Loan</a></li>
                <li><a href="trans_rcvd.php"><i class="fa fa-circle-o"></i>Transfer</a></li>
              </ul>
			  </ul>
            </li>

			<li class="treeview"><a href="about.php"><i class="fa fa-th-list"></i><span>About</span><i class="fa fa-angle-right"></i></a>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i>Home</h1>
            <p>Inventory Management System</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Home</a></li>
            </ul>
          </div>
        </div>
		
		<div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Overview on IMS</h3>
              <div class="embed-responsive embed-responsive-16by9">
                <canvas id="polarChartDemo" class="embed-responsive-item"></canvas>
              </div>
            </div>
          </div>
          
          
		
		 <div class="col-md-6">
            <div class="card">
			<h3 class="card-title">Summary on IMS</h3>
		 <div class="card-body">
              </div>

		</div>
        </div>
		 </div>

	






    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    
   
	
   
  </body>
</html>
