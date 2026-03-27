<?php
	include 'config.php';
	$nama=$_POST['nama'];
	$ucapan=$_POST['ucapan'];
	$hadir=$_POST['hadir'];
	$sql = "INSERT INTO `ucapan`( `nama`, `ucapan`, `status`) 
	VALUES ('$nama','$ucapan','$hadir')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>