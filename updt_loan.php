<?php
include('db_conn.php');
?>

<?php

	$idno = $_POST['field1'];
	$type = $_POST['field2'];
	$data = $_POST['field3'];
	
	if($type=="Issue Date")
	{
		
		$query3="UPDATE `loan` SET `issdate`='$data' WHERE idno='$idno'";
	}
	if($type=="Type")
	{
		
		$query3="UPDATE `loan` SET `type`='$data' WHERE idno='$idno'";
	}
	if($type=="Receive Department")
	{
		
		$query3="UPDATE `loan` SET `rcvdept`='$data' WHERE idno='$idno'";
	}
	if($type=="Remark")
	{
		
		$query3="UPDATE `loan` SET `remark`='$data' WHERE idno='$idno'";
	}
	
	
	
	$result3 = mysql_query($query3);
	
	if($result3)
	{
		header('location:loan.php');
	}

?>