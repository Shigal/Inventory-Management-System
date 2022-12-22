<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'ims');

	// initialize variables
	$foliono = "";
	$intdate = "";
	$type = "";
	$mat = "";
	$dimen = "";
	$idno = "";
	$furt_id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$furt_id = $_POST['furt_id'];
		$idno = $_POST['idno'];
		$foliono = $_POST['foliono'];
		$intdate = $_POST['intdate'];
		$type = $_POST['type'];
		$mat = $_POST['mat'];
		$dimen = $_POST['dimen'];

		mysqli_query($db, "INSERT INTO furt (idno,foliono,intdate,type,mat,dimen) VALUES ('$idno', '$foliono', '$intdate', '$type', '$mat', '$dimen')"); 
		$_SESSION['message'] = "A furniture is saved!"; 
		header('location: furd3.php');
	}
	if (isset($_POST['update'])) {
		$furt_id = $_POST['furt_id'];
		$idno = $_POST['idno'];
		$foliono = $_POST['foliono'];
		$intdate = $_POST['intdate'];
		$type = $_POST['type'];
		$mat = $_POST['mat'];
		$dimen = $_POST['dimen'];

		mysqli_query($db, "UPDATE furt SET idno='$idno', foliono='$foliono',  intdate='$intdate', type='$type', mat='$mat', dimen='$dimen' WHERE furt_id= '$furt_id' ");
		$_SESSION['message'] = "Furniture is updated!"; 
		header('location: furd.php');
//		header('Location: ' . $_SERVER['HTTP_REFERER']);
//		header("location:javascript://history.go(-1)");
}
	if (isset($_GET['del'])) {
	$furt_id = trim($_GET['del']);
//	$lab_id = strip_tags($idno);
//	$idno = htmlspecialchars($idno);
	
	mysqli_query($db, "DELETE FROM furt WHERE furt_id='$furt_id'");
	$_SESSION['message'] = "A furniture is deleted!"; 
	header('location: furd3.php');
}
	
	
	
?>
