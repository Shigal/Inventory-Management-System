<?php
include('db_conn.php');
?>

<?php

	$idno = $_POST['field1'];
	
	
	
	$query3 = "DELETE FROM `lab` WHERE idno='$idno'";
	
	$result3 = mysql_query($query3);
	
	if($result3)
	{
		header('location:lab.php');
	}

?>