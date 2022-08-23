<?php
	include('connexion_db.php');
	$id = $_GET['delete'];

	$query = "DELETE FROM apprenants WHERE matricule_Apprenants='$id'";
	if ($db->query($query) === TRUE) {
		header('Location: DBE.php');
	}
	
 ?>