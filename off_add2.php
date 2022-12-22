<?php
include('db_conn.php');
?>

<?php

	$id = $_POST['field1'];
	$item  = $_POST['field2'];
	$date = $_POST['field3'];
	
	$query10 = "SELECT * FROM `office` WHERE `idno`='$id'";
			$result10 = mysql_query($query10);
			$count10 = mysql_num_rows($result10);
			if($count10!=0){
				
				
				 
				 $message = "Entry already exist";
echo "<script type='text/javascript'>window.confirm('$message');</script>";
					/* exit("<script type='text/javascript'>alert('$message');</script>"); */
					/* header('location:add_lab.html'); */
					echo "<script type='text/javascript'>window.location.href=\"office_add.html\";</script>";
					
					die();
			}
			
			else
			{
	
	
	$query8 = "INSERT INTO office (idno,name,intdate) VALUES('$id','$item','$date')";
	
	$result8 = mysql_query($query8);
	
	if($result8)
	{
		header('location:office_add.html');
	}
			}
?>

