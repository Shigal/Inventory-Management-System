<?php
include('db_conn.php');
?>

<?php

	$idno = $_POST['field1'];
	$type = $_POST['field2'];
	$data = $_POST['field3'];
	
	
	if($type=="Inventory Date")
	{
		
		$query3="UPDATE `cons` SET `intdate`='$data' WHERE idno='$idno'";
	}
	
	if($type=="Type")
	{
		
		$query3="UPDATE `cons` SET `type`='$data' WHERE idno='$idno'";
	}
	
	if($type=="Brand")
	{
		
		$query3="UPDATE `cons` SET `brand`='$data' WHERE idno='$idno'";
	}
	if($type=="Size")
	{
		
		$query3="UPDATE `cons` SET `size`='$data' WHERE idno='$idno'";
	}
	if($type=="No of items")
	{
		
		$query3="UPDATE `cons` SET `noitem`='$data' WHERE idno='$idno'";
	}
	
	
	$result3 = mysql_query($query3);
	
	if($result3)
	{
		header('location:consu.php');
	}

?>