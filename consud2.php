<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'ims');

	// initialize variables

	$intdate = "";
	$type = "";
	$brand = "";
	$size = "";
	$noitem = "";
	$idno = "";
	$cons_id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$cons_id = $_POST['cons_id'];
		$idno = $_POST['idno'];
		$intdate = $_POST['intdate'];
		$type = $_POST['type'];
		$brand = $_POST['brand'];
		$size = $_POST['size'];
		$noitem = $_POST['noitem'];

		mysqli_query($db, "INSERT INTO cons (idno,intdate,type,brand,size,noitem) VALUES ('$idno', '$intdate', '$type', '$brand', '$size', '$noitem')"); 
		$_SESSION['message'] = "A consumable item is saved!"; 
		header('location: consud3.php');
	}
	if (isset($_POST['update'])) {
		$cons_id = $_POST['cons_id'];
		$idno = $_POST['idno'];
		$intdate = $_POST['intdate'];
		$type = $_POST['type'];
		$brand = $_POST['brand'];
		$size = $_POST['size'];
		$noitem = $_POST['noitem'];

		mysqli_query($db, "UPDATE cons SET idno='$idno', intdate='$intdate', type='$type', brand='$brand', size='$size', noitem='$noitem' WHERE cons_id= '$cons_id' ");
		$_SESSION['message'] = "A consumable item is updated!"; 
		header('location: consud.php');
//		header('Location: ' . $_SERVER['HTTP_REFERER']);
//		header("location:javascript://history.go(-1)");
}
	if (isset($_GET['del'])) {
	$cons_id = trim($_GET['del']);
//	$lab_id = strip_tags($idno);
//	$idno = htmlspecialchars($idno);
	
	mysqli_query($db, "DELETE FROM cons WHERE cons_id='$cons_id'");
	$_SESSION['message'] = "A consumable item is deleted!"; 
	header('location: consud3.php');
}
	
	
	
?>
