<?php
include('db_conn.php');
?>

<?php

	$idno = $_POST['field1'];
	$type = $_POST['field2'];
	$data = $_POST['field3'];
	
	if($type=="Received Date")
	{
		
		$query3="UPDATE `loan-rcv` SET `rcvdate`='$data' WHERE idno='$idno'";
	}
	if($type=="Type")
	{
		
		$query3="UPDATE `loan-rcv` SET `type`='$data' WHERE idno='$idno'";
	}
	if($type=="Send Department")
	{
		
		$query3="UPDATE `loan-rcv` SET `givendept`='$data' WHERE idno='$idno'";
	}
	if($type=="Remark")
	{
		
		$query3="UPDATE `loan-rcv` SET `remark`='$data' WHERE idno='$idno'";
	}
	
	
	
	$result3 = mysql_query($query3);
	
	if($result3)
	{
		header('location:loan_rcvd.php');
	}

?>