<?php
include('db_conn.php');
?>

<?php

	$isdate = $_POST['field1'];
	$id  = $_POST['field2'];
	$type = $_POST['field3'];
	$rcvdept = $_POST['field4'];
	$rmrk  = $_POST['field5'];
	
	$query10 = "SELECT * FROM `loan` WHERE `idno`='$id'";
			$result10 = mysql_query($query10);
			$count10 = mysql_num_rows($result10);
			if($count10!=0){
				
				
				 
				 $message = "Entry already exist";
echo "<script type='text/javascript'>window.confirm('$message');</script>";
					/* exit("<script type='text/javascript'>alert('$message');</script>"); */
					/* header('location:add_lab.html'); */
					echo "<script type='text/javascript'>window.location.href=\"loan_add.html\";</script>";
					
					die();
			}
			
			else
			{
	
	
	$query6 = "INSERT INTO loan (issdate,idno,type,rcvdept,remark) VALUES('$isdate','$id','$type','$rcvdept','$rmrk')";
	
	$result6 = mysql_query($query6);
	
	if($result6)
	{
		header('location:loan_add.html');
	}
			}
?>