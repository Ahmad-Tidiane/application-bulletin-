<?php
	include('connexion_db.php');
	$id = $_GET['delte'];

	$query = "DELETE FROM competences WHERE code_Competences='$id'";
	if ($db->query($query) === TRUE) {
		header('Location: comp.php');
	}
	
 ?>