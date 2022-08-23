<?php 
	include('connexion_db.php');
		$id = $_GET["edit"];
        $nom=$_POST['nom'];
        $pre=$_POST['prenom'];
        $age=$_POST['age'];
        $tel=$_POST['telephone'];
        $ema=$_POST['email'];
        $idf=$_POST['filière'];
        $add=$_POST['adresse'];
        $pro=$_POST['promotion'];

	$query = "UPDATE apprenants SET Nom_Apprenants='$nom', Prenom_Apprenants='$pre', Email_Apprenants='$ema',Date_Naissance_Apprenants='$age',Adresse_Apprenants='$add', Num_tel_Apprenants='$tel', promotion_Apprenants=$pro, code_Filieres='$idf'  WHERE matricule_Apprenants=$id";
	
	if ($db->query($query) === TRUE) {
	  echo "Liste des Apprenants";
	  header('Location: DBE.php');
	  exit();

	} else {
	  echo "Error: " . $query . "<br>" . $db->error;
	}

	$db->close();
 ?>