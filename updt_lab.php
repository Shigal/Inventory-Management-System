<?php
include('db_conn.php');
?>

<?php

	$idno = $_POST['field1'];
	$type = $_POST['field2'];
	$data = $_POST['field3'];
	
	if($type=="Serial No")
	{
		
		$query3="UPDATE `lab` SET `serial`='$data' WHERE idno='$idno'";
	}
	if($type=="Inventory Date")
	{
		
		$query3="UPDATE `lab` SET `intdate`='$data' WHERE idno='$idno'";
	}
	if($type=="Warranty Period")
	{
		
		$query3="UPDATE `lab` SET `warrenty`='$data' WHERE idno='$idno'";
	}
	if($type=="Type")
	{
		
		$query3="UPDATE `lab` SET `type`='$data' WHERE idno='$idno'";
	}
	
	if($type=="Make")
	{
		
		$query3="UPDATE `lab` SET `make`='$data' WHERE idno='$idno'";
	}
	if($type=="Model")
	{
		
		$query3="UPDATE `lab` SET `model`='$data' WHERE idno='$idno'";
	}
	if($type=="Year of Manufacture")
	{
		
		$query3="UPDATE `lab` SET `yrmanu`='$data' WHERE idno='$idno'";
	}
	if($type=="State")
	{
		
		$query3="UPDATE `lab` SET `state`='$data' WHERE idno='$idno'";
	}
	if($type=="Discription")
	{
		
		$query3="UPDATE `lab` SET `discpt`='$data' WHERE idno='$idno'";
	}

	
	
	$result3 = mysql_query($query3);
	
	if($result3)
	{
		header('location:lab.php');
	}

?>