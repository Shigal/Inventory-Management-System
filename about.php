<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
        <div class="row user">
          <div class="col-md-12">
            <div class="profile">
              <div class="info">
                <h4>IMS</h4>
                <p>Department of Computer Science | University of Jaffna.</p>
              </div>
              <div class="cover-image"></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card p-0">
              <ul class="nav nav-tabs nav-stacked user-tabs">
                <li class="active"><a href="#user-timeline" data-toggle="tab">About Us</a></li>
                <li><a href="#user-settings" data-toggle="tab">People behind the project :-</a></li>
                <li><a href="#user-settings2" data-toggle="tab">Currently updated by :-</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-9">
            <div class="tab-content">
              <div id="user-timeline" class="tab-pane active">
                <div class="timeline">
                  <div class="post">
                    <div class="post-media"><a href="#"></a>
                      <div class="content">
                        <h5><a href="#">University Of Jaffna.</a></h5>
                        <p class="text-muted"><small>This project was conducted by undergraduates as group project in 2nd year.</small></p>
                      </div>
                    </div>
                    <div class="post-content">
                      <p>• Advisor | Dr. A. Ramanan Senior Lecturer, Department Of Computer Science, UOJ
											<br>
							• Information | Mr. T. Sugirthan Assistant Network Manager, UOJ</p>
                    </div>
                    
                  </div>
                  
                </div>
              </div>
              <div id="user-settings" class="tab-pane fade">
                <div class="card user-settings">
                  <h4 class="line-head">Group 11 (2017)</h4>
                  <form>
                    <div class="clearfix">
                      <div class="col-md-8 mb-20">
                        <label> 2014/SP/112 | W.M.D.M Gunawardhana</label>
                        
                      </div>
                      
                    </div>
                   <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>2014/SP/124 | H.P.M Maduka</label>
                        
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>2014/SP/164 | V. Mohan</label>
                        
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>2014/SP/202 | K.A.K.M. Kaluarachchi</label>
                        
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>2014/SP/232 | K. Anujan</label>
                        
                      </div>
                    </div>
                    <div class="row mb-10">
                      <div class="col-md-12">
                       
                      </div>
                    </div>
                  </form>
                </div>
				
				<div id="user-settings2" class="tab-pane fade">
                <div class="card user-settings">
                  <h4 class="line-head">Group 09 (2018)</h4>
                  <form>
                    <div class="clearfix">
                      <div class="col-md-8 mb-20">
                        <label> 2015/SP/144 | R. Shahilashinie</label>
                        
                      </div>
                      
                    </div>
                   <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>2015/SP/157 | M. Suhirthashini</label>
                        
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>2015/SP/167 | T. Lawshiga</label>
                        
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>2015/SP/220 | T. Tharani</label>
                        
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>2015/SP/255 | B.K.M.D.Nuwanga Rodrigo</label>
                        
                      </div>
                    </div>
                    <div class="row mb-10">
                      <div class="col-md-12">
                       
                      </div>
                    </div>
                  </form>
                </div>
				
              </div>
            </div>
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
  </body>
</html>