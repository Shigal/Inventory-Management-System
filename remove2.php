<?php
include('db_conn.php');
?>

<?php

	$idno = $_POST['field1'];
	$item  = $_POST['field2'];
	$reason = $_POST['field3'];
	$from = $_POST['field4'];
	$to = $_POST['field5'];
	
	
	$query5 = "INSERT INTO dlt (idno,itemname,reason,dfrom,dto) VALUES('$idno','$item','$reason','$from','$to')";
	
	$result5 = mysql_query($query5);
	
	if($result5)
	{
		header('location:remove.html');
	}

?>