<?php
include('db_conn.php');
?>

<?php

	$idno = $_POST['field1'];
	$type  = $_POST['field2'];
	$intdate = $_POST['field3'];
	$mat = $_POST['field4'];
	$dimen = $_POST['field5'];
	
	$query10 = "SELECT * FROM `furt` WHERE `idno`='$idno'";
			$result10 = mysql_query($query10);
			$count10 = mysql_num_rows($result10);
			if($count10!=0){
				
				
				 
				 $message = "Entry already exist";
echo "<script type='text/javascript'>window.confirm('$message');</script>";
					/* exit("<script type='text/javascript'>alert('$message');</script>"); */
					/* header('location:add_lab.html'); */
					echo "<script type='text/javascript'>window.location.href=\"fur_add.html\";</script>";
					
					die();
			}
			
			else
			{
	
	
	$query3 = "INSERT INTO furt (idno,type,intdate,mat,dimen) VALUES('$idno','$type','$intdate','$mat','$dimen')";
	
	$result3 = mysql_query($query3);
	
	if($result3)
	{
		header('location:fur_add.html');
	}
			}
?>