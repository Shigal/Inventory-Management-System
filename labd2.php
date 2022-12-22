<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'ims');

	// initialize variables
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
	$idno = "";
	$lab_id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$lab_id = $_POST['lab_id'];
		$idno = $_POST['idno'];
		$foliono = $_POST['foliono'];
		$serial = $_POST['serial'];
		$intdate = $_POST['intdate'];
		$warrenty = $_POST['warrenty'];
		$type = $_POST['type'];
		$make = $_POST['make'];
		$model = $_POST['model'];
		$yrmanu = $_POST['yrmanu'];
		$state = $_POST['state'];
		$model = $_POST['discpt'];

		mysqli_query($db, "INSERT INTO lab (idno,foliono,serial,intdate,warrenty,type,make,model,yrmanu,state,model) VALUES ('$idno', '$foliono', '$serial', '$intdate', '$warrenty', '$type', '$make','$model','$yrmanu','$state','$model')"); 
		$_SESSION['message'] = "A Lab Equipment saved!"; 
		header('location: labd3.php');
	}
	if (isset($_POST['update'])) {
		$lab_id = $_POST['lab_id'];
		$idno = $_POST['idno'];
		$foliono = $_POST['foliono'];
		$serial = $_POST['serial'];
		$intdate = $_POST['intdate'];
		$warrenty = $_POST['warrenty'];
		$type = $_POST['type'];
		$make = $_POST['make'];
		$model = $_POST['model'];
		$yrmanu = $_POST['yrmanu'];
		$state = $_POST['state'];
		$discpt = $_POST['discpt'];

		mysqli_query($db, "UPDATE lab SET idno='$idno', foliono='$foliono', serial='$serial', intdate='$intdate', warrenty='$warrenty', type='$type', make='$make', model='$model', yrmanu='$yrmanu', state='$state', discpt='$discpt' WHERE lab_id= '$lab_id' AND foliono='$foliono'");
		$_SESSION['message'] = "A lab Equipment is updated!"; 
		header('location: lab.php');
//		header('Location: ' . $_SERVER['HTTP_REFERER']);
//		header("location:javascript://history.go(-1)");
}
	if (isset($_GET['del'])) {
	$lab_id = trim($_GET['del']);
//	$lab_id = strip_tags($idno);
//	$idno = htmlspecialchars($idno);
	
	mysqli_query($db, "DELETE FROM lab WHERE lab_id='$lab_id'");
	$_SESSION['message'] = "A Lab Equipment is deleted!"; 
	header('location: labd3.php');
}

	function processDrpdown($selectedVal) {
		echo "Selected value in php ".$selectedVal;
	} 	
	
	
?>
