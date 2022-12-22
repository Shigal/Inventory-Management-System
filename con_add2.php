<?php
include('db_conn.php');
?>

<?php

	$idno = $_POST['field1'];
	$intdate  = $_POST['field2'];
	$type = $_POST['field3'];
	$brand = $_POST['field4'];
	$size = $_POST['field5'];
	$noitem = $_POST['field6'];
	
	$query10 = "SELECT * FROM `cons` WHERE `idno`='$idno'";
			$result10 = mysql_query($query10);
			$count10 = mysql_num_rows($result10);
			if($count10!=0){
				
				
				 
				 $message = "Entry already exist";
echo "<script type='text/javascript'>window.confirm('$message');</script>";
					/* exit("<script type='text/javascript'>alert('$message');</script>"); */
					/* header('location:add_lab.html'); */
					echo "<script type='text/javascript'>window.location.href=\"consu_add.html\";</script>";
					
					die();
			}
			
			else
			{
	
	
	
	
	$query4 = "INSERT INTO cons (idno,intdate,type,brand,size,noitem) VALUES('$idno','$intdate','$type','$brand','$size','$noitem')";
	
	$result4 = mysql_query($query4);
	
	if($result4)
	{
		header('location:consu_add.html');
	}
			}
?>