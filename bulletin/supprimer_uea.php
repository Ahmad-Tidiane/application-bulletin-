<?php
	include('connexion_db.php');
	$id = $_GET['delete'];

	$query = "DELETE FROM uea WHERE code_uea='$id'";
	if ($db->query($query) === TRUE) {
		header('Location: uea.php');
	}
	
 ?>