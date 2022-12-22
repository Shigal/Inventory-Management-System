<?php
	ob_start();
	session_start();
	include('db_conn.php');
	
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: home.html");
		exit;
	}
	$nameError ="";
	$passError ="";
	$emailError="";
	$error = false;
	
	if( isset($_POST['btn-login']) ) {	
		
		// prevent sql injections/ clear user invalid inputs
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		
		// prevent sql injections / clear user invalid inputs
		
		if(empty($name)){
			$error = true;
			$nameError = "Please enter your name.";
		}
		
		
		if(empty($pass)){
			$error = true;
			$passError = "Please enter your password.";
		}
		
		// if there's no error, continue to login
		if (!$error) {
			
			 // password hashing using SHA256
		
			$res="SELECT * FROM signup WHERE username='$name' and password='$pass'";
			$result=mysql_query($res);
			$count = mysql_num_rows($result); // if uname/pass correct it returns must be 1 row
			
			if( $count == 1 ) {
					while($row=mysql_fetch_array($result))
					{
				$_SESSION['user'] = $row['username'];
				header("Location:home.html");
					}
			} else {
				$errMSG = "Incorrect Credentials, Try again...";
			}
				
		}
		
	}
	
	
	
	
	
	
	
?>






<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>IMS Login Form</title>
  
  <<link rel="stylesheet" type="text/css" href="css/main.css">

  
</head>

<body>
  
<div class="container">

  <div class="info">
    <h1>IMS Login </h1> <span>University of Jaffna | Computer Science Department</span>
  </div>
</div>

 <?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group" style="color:DarkBlue">
            	<div  style="text-align:center;">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
				</br>
                <?php
			}
			?>




<div class="form">
  <div class="thumbnail"><img src="image\logo.jpg" height=150px width=150px ></div>
  
  
  <form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    <input type="text" placeholder="username" name="name"/>
	<span class="text-danger"><?php echo $nameError; ?></span>
    <input type="password" placeholder="password" name="pass"/>
	<span class="text-danger"><?php echo $passError; ?></span>
    <button type="submit" name="btn-login">login</button>
    <p class="message">Not registered? <a href="register.php">Create an account</a></p>
  </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
  <script src='js/login2.js'></script>

    <script src="js/login.js"></script>

</body>
</html>
<?php ob_end_flush(); ?>
