<?php
include('db_conn.php');
?>

<?php

	$idno = $_POST['field1'];
	$erial  = $_POST['field2'];
	$intdate = $_POST['field3'];
	$warrenty = $_POST['field4'];
	$type = $_POST['field5'];
	$make = $_POST['field6'];
	$model  = $_POST['field7'];
	$yrmanu = $_POST['field8'];
	$state  = $_POST['field9'];
	$discpt = $_POST['field10'];
	
	$query10 = "SELECT * FROM `lab` WHERE `idno`='$idno'";
			$result10 = mysql_query($query10);
			$count10 = mysql_num_rows($result10);
			if($count10!=0){
				
				
				 
				 $message = "Entry already exist";
echo "<script type='text/javascript'>window.confirm('$message');</script>";
					/* exit("<script type='text/javascript'>alert('$message');</script>"); */
					/* header('location:add_lab.html'); */
					echo "<script type='text/javascript'>window.location.href=\"add_lab.html\";</script>";
					
					die();
			}
			
			else
			{

	$query1 = "INSERT INTO lab (idno,serial,intdate,warrenty,type,make,model,yrmanu,state,discpt) VALUES('$idno','$serial','$intdate','$warrenty','$type','$make','$model','$yrmanu','$state','$discpt')";
	
	$result1 = mysql_query($query1);
	
	if($result1)
	{
		header('location:add_lab.html');
	}
			}
?>		

