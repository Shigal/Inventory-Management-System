<?php  include('consud2.php'); ?>

<?php 
	if (isset($_GET['edit'])) {
		$cons_id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM cons WHERE cons_id='$cons_id'");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$idno = $n['idno'];
			$intdate = $n['intdate'];
			$type = $n['type'];
			$brand = $n['brand'];
			$size = $n['size'];
			$noitem = $n['noitem'];

		}
	}
?>
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
//	ob_start();
//	session_start();
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
            <h1>Details on Furniture</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Inventory</li>
              <li class="active"><a href="consu.php">Consumable</a></li>
            </ul>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
               <div class="body">
                            <?php if (isset($_SESSION['message'])): ?>
							<div class="alert alert-success">
								<?php 
									echo $_SESSION['message']; 
									unset($_SESSION['message']);
								?>
							</div>
						<?php endif ?>

						<?php $results = mysqli_query($db, "SELECT * FROM cons"); ?>

							<form id="form_advanced_validation" method="post" action="consud2.php" >		
								
						<input type="hidden" name="cons_id" value="<?php echo $cons_id; ?>">
								
								
								
								<div class="form-group form-float">
                                    <div class="form-line">
									<label class="form-label">Identification No</label>
									<input type="text" name="idno" value="<?php echo $idno; ?>" class="form-control" required>
								</div>
								</div>
								
								
							
								
								<div class="form-group form-float">
                                    <div class="form-line">
									<label class="form-label">Inventory Date</label>
									<input type="date" name="intdate" value="<?php echo $intdate; ?>" class="form-control" placeholder="UJ/COMPSC/">
								</div>
								</div>
								
								
								<div class="form-group form-float">
                                    <div class="form-line">
									<label class="form-label">Item Type</label>
									<input type="text" name="type" value="<?php echo $type; ?>" class="form-control">
								</div>
								</div>
								
								<div class="form-group form-float">
                                    <div class="form-line">
									<label class="form-label">Brand</label>
									<input type="text" name="brand" value="<?php echo $brand; ?>" class="form-control">
								</div>
								</div>
								<div class="form-group form-float">
                                    <div class="form-line">
									<label class="form-label">Size</label>
									<input type="text" name="size" value="<?php echo $size; ?>" class="form-control">
								</div>
								</div>
								
								<div class="form-group form-float">
                                    <div class="form-line">
									<label class="form-label">Quantity</label>
									<input type="text" name="noitem" value="<?php echo $noitem; ?>" class="form-control">
								</div>
								</div>
							
								
								<div class="input-group">
									<?php if ($update == true): ?>
										
										<button class="btn btn-primary" type="submit" name="update" >update</button>
									<?php else: ?>
										<button class="btn btn-success" type="submit" name="save" >Save</button>
									<?php endif ?>

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
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>