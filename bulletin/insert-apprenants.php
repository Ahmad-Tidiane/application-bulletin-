<?php 
	include('connexion_db.php');

	$nom=$_POST['nom'];
	$mat=$_POST['matricule'];
	$pre=$_POST['prenom'];
	$age=$_POST['age'];
	$tel=$_POST['telephone'];
	$ema=$_POST['email'];
	$idf=$_POST['filière'];
	$add=$_POST['adresse'];
	$pro=$_POST['promotion'];
	
	$query = "INSERT INTO apprenants 
	VALUES ('$mat','$nom','$pre','$ema','$age','$add','$tel',$pro,'$idf')";
	
	if ($db->query($query) === TRUE) {
	  echo "New record created successfully";
	  header('Location: DBE.php');
	  exit();

	} else {
	  echo "Error: " . $query . "<br>" . $db->error;
	}

	$db->close();
 ?>