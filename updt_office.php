<?php
include('db_conn.php');
?>

<?php

	$idno = $_POST['field1'];
	$type = $_POST['field2'];
	$data = $_POST['field3'];
	
	if($type=="Item Name")
	{
		
		$query3="UPDATE `office` SET `name`='$data' WHERE idno='$idno'";
	}
	if($type=="Inventory Date")
	{
		
		$query3="UPDATE `office` SET `intdate`='$data' WHERE idno='$idno'";
	}
	
	
	
	$result3 = mysql_query($query3);
	
	if($result3)
	{
		header('location:office.php');
	}

?>