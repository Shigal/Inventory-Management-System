<?php
include('db_conn.php');
$idno = trim($_POST['idno']);
$idno = strip_tags($idno);
$idno = htmlspecialchars($idno);

if(isset($_POST['update'])){
        
$selectoption = $_POST['taskoption']; 

}

$query1 = "UPDATE `lab` SET `state` = '$selectoption' WHERE `idno` = '$idno'";
$result1 = mysql_query($query1,$con);


mysql_close($con);
?>