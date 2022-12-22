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
	<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>"+
              'University Of Jaffna'+"<br>"+
              'Faculty of Science'+"<br>"+
              Date()+

              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
	
	
	
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
            <h1>Details on Office Equipment</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Inventory</li>
              <li class="active"><a href="#">Office Equipment</a></li>
            </ul>
          </div>
          <div><a href="officed.php" class="btn btn-primary btn-flat"><i class="fa fa-lg fa-plus"></i></a></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
			 <form id="form1" runat="server">
              <div class="card-body">
				<div id="printablediv">
			 <?php



	include('db_conn.php');



	
	$query2 = "SELECT type,foliono,COUNT(idno) FROM office GROUP BY foliono";



				if($query2_run = mysql_query($query2))
					{
						$count = mysql_num_rows($query2_run);
							if($count == null)
								{
									echo "No records".mysql_error();
								}
							else
								{
									echo "<table id=\"sampleTable\" class=\"table table-hover table-bordered\">
									 <thead>
                     <tr>
                       <th>Description</th>
                       <th>Foliono</th>
                       <th>Quantity</th>
                     </tr>
					 </thead>";
					 

									while($query2_row=mysql_fetch_assoc($query2_run))
										{
											$type = $query2_row['type'];
											$foliono = $query2_row['foliono'];
											$quantity = $query2_row['COUNT(idno)'];
                   
											echo "<tr>";
											echo "<td>".$type."</td>";
											echo "<td><form action = \"officed3.php\" method = \"post\"><input type = \"hidden\" name = \"foliono\" value = \" ".$foliono."\" style=\"text-decoration:none\"/><input type=\"submit\" value=\" ".$foliono."\"/></form></td>";
											echo "<td>".$quantity."</td></tr>";
										}
										echo"</table>";
								}
					}

				else
					{
						echo "Query Failed".mysql_error();
					}

		
		
?>


              </div>
              </div>
			  

<div class="row hidden-print mt-20">
                  <div class="col-xs-12 text-right"><a onclick="javascript:printDiv('printablediv')" class="btn btn-primary"><i class="fa fa-print"></i> Print</a></div>
                </div>
    </form>
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
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>
