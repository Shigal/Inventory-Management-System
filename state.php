<?php
$db = mysql_connect("localhost", "root", "") or die("could not connect:".mysql_error());
mysql_select_db("ims", $db);

$idno = "";
$foliono = "";
$serial = "";
$intdate = "";
$warrenty = "";
$type = "";
$make = "";
$model = "";
$yrmanu = "";
$state = "";
$discpt = "";

if(!empty($_GET(['folio']))){
	$foliono = $_GET['foliono'];
	$query2 = "SELECT * FROM `lab` WHERE foliono='$foliono'";
	$result2 = mysql_query($query2, $db);
	
	if(result2){
		header('location: lab2.php');
	}
}


/* $idno = trim($_GET['idno']);      
$selectoption = $_POST['taskoption']; 
$query1 = "UPDATE `lab` SET `state` = '$selectoption' WHERE `idno` = '$idno' ";
$result1 = mysql_query($query1, $db);

if($result1){
	header('location: lab2.php');
} */

mysql_close($db);

?>