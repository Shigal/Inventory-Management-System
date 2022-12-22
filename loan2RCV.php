<?php
include('db_conn.php');
?>

<?php

	$rcvdate = $_POST['field1'];
	$id  = $_POST['field2'];
	$type = $_POST['field3'];
	$givendept = $_POST['field4'];
	$rmrk  = $_POST['field5'];
	
	$query10 = "SELECT * FROM `loan-rcv` WHERE `idno`='$id'";
			$result10 = mysql_query($query10);
			$count10 = mysql_num_rows($result10);
			if($count10!=0){
				
				
				 
				 $message = "Entry already exist";
echo "<script type='text/javascript'>window.confirm('$message');</script>";
					/* exit("<script type='text/javascript'>alert('$message');</script>"); */
					/* header('location:add_lab.html'); */
					echo "<script type='text/javascript'>window.location.href=\"loanRCV_add.html\";</script>";
					
					die();
			}
			
			else
			{
	
	$query6 = "INSERT INTO `loan-rcv`(rcvdate,idno,type,givendept,remark) VALUES('$rcvdate','$id','$type','$givendept','$rmrk')";
	
	$result6 = mysql_query($query6);
	
	if($result6)
	{
		header('location:loanRCV_add.html');
	}
			}
?>