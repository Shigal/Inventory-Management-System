<?php
include('db_conn.php');
?>

<?php

	$trnsdate = $_POST['field1'];
	$id  = $_POST['field2'];
	$type = $_POST['field3'];
	$rcvdept = $_POST['field4'];
	
	$query10 = "SELECT * FROM `trans` WHERE `idno`='$id'";
			$result10 = mysql_query($query10);
			$count10 = mysql_num_rows($result10);
			if($count10!=0){
				
				
				 
				 $message = "Entry already exist";
echo "<script type='text/javascript'>window.confirm('$message');</script>";
					/* exit("<script type='text/javascript'>alert('$message');</script>"); */
					/* header('location:add_lab.html'); */
					echo "<script type='text/javascript'>window.location.href=\"trans_add.html\";</script>";
					
					die();
			}
			
			else
			{
	
	$query7 = "INSERT INTO trans (trsdate,idno,type,rcvdept) VALUES('$trnsdate','$id','$type','$rcvdept')";
	
	$result7 = mysql_query($query7);
	
	if($result7)
	{
		header('location:trans_add.html');
	}
			}
?>

