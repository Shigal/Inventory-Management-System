<?php
include('db_conn.php');
?>

<?php

	$idno = $_POST['field1'];
	$type = $_POST['field2'];
	$data = $_POST['field3'];
	
	if($type=="Transfer Date")
	{
		
		$query3="UPDATE `trans` SET `trsdate`='$data' WHERE idno='$idno'";
	}
	if($type=="Type")
	{
		
		$query3="UPDATE `trans` SET `type`='$data' WHERE idno='$idno'";
	}
	if($type=="Receive Department")
	{
		
		$query3="UPDATE `trans` SET `rcvdept`='$data' WHERE idno='$idno'";
	}
	
	
	
	$result3 = mysql_query($query3);
	
	if($result3)
	{
		header('location:trans.php');
	}

?>