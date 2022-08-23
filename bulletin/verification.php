<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    include 'connexion_db.php';

    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM users where 
              Matricule_Formateurs = '".$username."' and passwrd = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['Matricule_Formateurs'] = $username;
           header('Location: accueil.php');
        }
        else
        {
           header('Location: auth.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: auth.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: accueil.php');
}
mysqli_close($db); // fermer la connexion
?>