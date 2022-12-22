<?php
include('db_conn.php');
?>

<?php

	$idno2 = $_POST['field1'];
	$idno3 = "css/lb";
	$idno = $idno3 + $idno2;
	
	$serial  = $_POST['field2'];
	$intdate = $_POST['field3'];
	$warrenty = $_POST['field4'];
	$type = $_POST['field5'];
	$make = $_POST['field6'];
	$model  = $_POST['field7'];
	$yrmanuf = $_POST['field8'];
	$a = $_POST['field9'];
	$b = $_POST['field10'];
	$c = $_POST['field11'];
	$d = $_POST['field12'];
	
	$query1 = "INSERT INTO lab (idno,serial,intdate,warrenty,type,make,model,yrmanu,type1,type2,type3,type4) VALUES('$idno','$serial','$intdate,','$warrenty','$type','$make','$model','$yrmanuf','$a','$b','$c','$d')";
	
	$result1 = mysql_query($query1);
	
	if($result1)
	{
		header('location:lab_add.php');
	}

?>