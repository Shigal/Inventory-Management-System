<?php
include('db_conn.php');
?>

<?php

	$trnsdate = $_POST['field1'];
	$id  = $_POST['field2'];
	$type = $_POST['field3'];
	$givendept = $_POST['field4'];
	
	$query10 = "SELECT * FROM `trans-rcv` WHERE `idno`='$id'";
			$result10 = mysql_query($query10);
			$count10 = mysql_num_rows($result10);
			if($count10!=0){
				
				
				 
				 $message = "Entry already exist";
echo "<script type='text/javascript'>window.confirm('$message');</script>";
					/* exit("<script type='text/javascript'>alert('$message');</script>"); */
					/* header('location:add_lab.html'); */
					echo "<script type='text/javascript'>window.location.href=\"transRCV_add.html\";</script>";
					
					die();
			}
			
			else
			{
	
	
	$query7 = "INSERT INTO `trans-rcv` (trsdate,idno,type,givendept) VALUES('$trnsdate','$id','$type','$givendept')";
	
	$result7 = mysql_query($query7);
	
	if($result7)
	{
		header('location:transRCV_add.html');
	}
			}
?>

