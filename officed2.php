<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'ims');

	// initialize variables
	$foliono = "";
	$intdate = "";
	$type = "";
	$idno = "";
	$office_id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$office_id = $_POST['office_id'];
		$idno = $_POST['idno'];
		$foliono = $_POST['foliono'];
		$intdate = $_POST['intdate'];
		$type = $_POST['type'];
		
		mysqli_query($db, "INSERT INTO office (idno,foliono,intdate,type) VALUES ('$idno', '$foliono', '$intdate', '$type')"); 
		$_SESSION['message'] = "An Office Equipment saved!"; 
		header('location: officed3.php');
	}
	if (isset($_POST['update'])) {
		$office_id = $_POST['office_id'];
		$idno = $_POST['idno'];
		$foliono = $_POST['foliono'];
		$intdate = $_POST['intdate'];
		$type = $_POST['type'];

		mysqli_query($db, "UPDATE office SET idno='$idno', foliono='$foliono',  intdate='$intdate', type='$type' WHERE office_id= '$office_id' ");
		$_SESSION['message'] = "An office Equipment is updated!"; 
		header('location: officed.php');
//		header('Location: ' . $_SERVER['HTTP_REFERER']);
//		header("location:javascript://history.go(-1)");
}
	if (isset($_GET['del'])) {
	$office_id = trim($_GET['del']);

	
	mysqli_query($db, "DELETE FROM office WHERE office_id='$office_id'");
	$_SESSION['message'] = "An office Equipment is deleted!"; 
	header('location: officed3.php');
}
	
	
	
?>
