<?php
include('db_conn.php');
?>

<?php

	$idno = $_POST['field1'];
	$type = $_POST['field2'];
	$data = $_POST['field3'];
	
	
	if($type=="Type")
	{
		
		$query3="UPDATE `furt` SET `type`='$data' WHERE idno='$idno'";
	}
	
	if($type=="Inventory Date")
	{
		
		$query3="UPDATE `furt` SET `intdate`='$data' WHERE idno='$idno'";
	}

	if($type=="Material")
	{
		
		$query3="UPDATE `furt` SET `mat`='$data' WHERE idno='$idno'";
	}
	if($type=="Dimension")
	{
		
		$query3="UPDATE `furt` SET `dimen`='$data' WHERE idno='$idno'";
	}
	
	
	$result3 = mysql_query($query3);
	
	if($result3)
	{
		header('location:fur.php');
	}

?>