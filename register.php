<?php
	ob_start();
	session_start();
	include('db_conn.php');
	
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: home.php");
		exit;
	}
	$nameError ="";
	$fnameError ="";
	$lnameError ="";
	$unameError ="";
	$deError ="";
	$passError ="";
	$emailError="";
	$error = false;
	
	
if ( isset($_POST['btn-signup']) ) {
		
		// clean user inputs to prevent sql injections
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		$fname = trim($_POST['fname']);
		$fname = strip_tags($fname);
		$fname = htmlspecialchars($fname);
		
		$lname = trim($_POST['lname']);
		$lname = strip_tags($lname);
		$lname = htmlspecialchars($lname);
		
		$designation = trim($_POST['designation']);
		$designation = strip_tags($designation);
		$designation = htmlspecialchars($designation);
		
		$uname = trim($_POST['uname']);
		$uname = strip_tags($uname);
		$uname = htmlspecialchars($uname);
		
		
		$password = trim($_POST['password']);
		$password = strip_tags($password);
		$password = htmlspecialchars($password);
		
		$email = trim($_POST['email']);
		$email= strip_tags($email);
		$email = htmlspecialchars($email);
		
		
		// basic name validation
		
		if (empty($name)) {
			$error = true;
			$nameError = "Please enter title.";
		} else if (strlen($name) < 2) {
			$error = true;
			$nameError = "Name must have atleat 2 characters.";
		} 
		
		if (empty($fname)) {
			$error = true;
			$fnameError = "Please enter your first name.";
		} else if (strlen($fname) < 2) {
			$error = true;
			$fnameError = "Name must have atleat 2 characters.";
		} 
		
		if (empty($lname)) {
			$error = true;
			$lnameError = "Please enter your last name.";
		} else if (strlen($lname) < 2) {
			$error = true;
			$lnameError = "Name must have atleat 2 characters.";
		} 
		
		if (empty($designation)) {
			$error = true;
			$deError = "Please enter your  designation.";
		} else if (strlen($designation) < 2) {
			$error = true;
			$denameError = "Name must have atleat 2 characters.";
		} 
		
		if ( empty($uname) ) {
			$error = true;
			$unameError = "Please enter your user name.";
		} else {
			// check user name exist or not
			$query1 = "SELECT * FROM signup WHERE username='$uname'";
			$result1 = mysql_query($query1);
			$count1 = mysql_num_rows($result1);
			if($count1!=0){
				$error = true;
				$unameError = "username is already in use.";
			}
		}
		
		
		
		
		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		} else {
			// check email exist or not
			$query = "SELECT email FROM signup WHERE email='$email'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "Provided Email is already in use.";
			}
		}
		// password validation
		if (empty($password)){
			$error = true;
			$passError = "Please enter password.";
		} else if(strlen($password) < 6) {
			$error = true;
			$passError = "Password must have atleast 6 characters.";
		}
		
		// password encrypt using SHA256();
		$password1 = hash('sha256', $password);
		
		// if there's no error, continue to signup
		if( !$error ) {
			
			$query2 = "INSERT INTO signup(title,firstname,lastname,designation,email,username,password) VALUES('$name','$fname','$lname','$designation','$email','$uname','$password')";
			$res2 = mysql_query($query2);
				
			if ($res2) {
				$errTyp = "success";
				$errMSG1 = "Successfully registered, you may login now";
				$errMSG2 = "<a href='index.php'>login</a>";
				unset($name);
				unset($fname);
				unset($lname);
				unset($uname);
				unset($designation);
				unset($email);
				unset($password);
			} else {
				$errTyp = "danger";
				$errMSG1 = "Something went wrong, try again later...";
				$errMSG2 = "";
			}	
				
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
    <title>IMS Login</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Inventory Management System</h1>
      </div>
 <?php
			if ( isset($errMSG1) ) {
				
				?>
				<div>
            	<div style="text-align:center;">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG1." ".$errMSG2; ?>
                </div>
            	</div>
                <?php
			}
			?>
	  
      <div class="login-box">
	  
	   
	  
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"autocomplete="off" class="login-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Create an account</h3>
          <div class="form-group">
           
           <input type="text" name="name" placeholder="title"  class="form-control"/>
  <span class="text-danger"><?php echo $nameError; ?></span>
  <input type="text" name="fname" placeholder="first name"  class="form-control"/>
  <span class="text-danger"><?php echo $fnameError; ?></span>
  <input type="text" name="lname" placeholder="last name"  class="form-control"/>
  <span class="text-danger"><?php echo $lnameError; ?></span>
  <input type="text" name="designation" placeholder="designation"  class="form-control"/>
  <span class="text-danger"><?php echo $deError; ?></span>
    <input type="text" name="uname" placeholder="user name"  class="form-control"/>
	<span class="text-danger"><?php echo $unameError; ?></span>
    <input type="password" name="password" placeholder="password"  class="form-control"/>
	<span class="text-danger"><?php echo $passError; ?></span>
    <input type="text" name="email" placeholder="email address"  class="form-control"/>
	<span class="text-danger"><?php echo $emailError; ?></span>
		


		
		



		
          </div>
          
         
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name='btn-signup' button type="submit">Create an account<i class="fa fa-sign-in fa-lg"></i></button>
          </div>
		  <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a href="index.php"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
        <form action="index.php" class="forget-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i></h3>
          <div class="form-group">
           
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">Create<i class="fa fa-unlock fa-lg"></i></button>
          </div>
          
        </form>
      </div>
    </section>
  
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/essential-plugins.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </body>
</html>
<?php ob_end_flush(); ?>